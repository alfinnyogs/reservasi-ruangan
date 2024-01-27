<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Arena;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BookingRequest;

class BookingController extends Controller
{

    public $sources = [
        [
            'model'      => Booking::class,
            'date_field' => 'time_from',
            'date_field_to' => 'time_to',
            'field'      => 'user_id',
            'number'      => 'arena_id',
            'uploadfile' => 'dokumen',
            'prefix'     => '',
            'suffix'     => '',
        ],
    ];

    public function index(Request $request){

        $bookings = [];
        $arenas = Arena::where('status',1)->get();

        foreach ($this->sources as $source) {
            $models = $source['model']::where('status', '0')
                ->get();
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                $crudFieldValueTo = $model->getOriginal($source['date_field_to']);
                $arena = Arena::findOrFail($model->getOriginal($source['number']));
                $user = User::findOrFail( $model->getOriginal($source['field']));
                $timeBreak = \Carbon\Carbon::parse($crudFieldValueTo)->format('H:i');

        
                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }

                $bookings[] = [
                    'title' => trim($source['prefix'] . "($arena->number)" . $user->name
                        . " " ). " " . $timeBreak,
                    'start' => $crudFieldValue,
                    'end' => $crudFieldValueTo,
                ];
            }
        }

        return view('welcome', compact('arenas', 'bookings'));
    }

    public function booking(Request $request){

        $arenas = Arena::where('status', 1)->get();
        $arenaNumber = $request->get('number');

        return view('booking', compact('arenas', 'arenaNumber'));
    }

    public function store(BookingRequest $request)
    {
        $arena = Arena::findOrFail($request->arena_id);
    
        $dokumen = null; // Initialize the variable
    
        // File Upload Logic
        if ($request->file('dokumen')) {
            $file = $request->file('dokumen');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            // Change the disk or path accordingly, for example, 'public'
            $file->move('assets/berkas', $nama_file);
            $dokumen = $nama_file;
        }
    
        // Create Booking and capture the result in $booking variable
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'status' => !isset($request->status) ? 3 : $request->status,
            'dokumen' => $dokumen,
            'arena_id' => $request->arena_id,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'keterangan' => $request->keterangan,
            // Add other fields from $request->validated() here
        ]);
    
        // Query additional details using the booking ID
        $bookingDetails = Booking::find($booking->id)->details;
    
        return redirect()->route('booking.success', $booking->id)->with([
            'message' => 'Reservasi sedang diproses silahkan menunggu disetujui oleh admin',
            'alert-type' => 'success',
        ]);
    }
    
    

    public function success($id)
    {
        $booking = Booking::findOrFail($id);
        $paymentDue = $booking->paymentDue;
    
        return view('success', compact('booking', 'paymentDue'));
    }

    public function viewByUser($userId)
    {
        $bookings = Booking::where('user_id', $userId)->paginate(10);

        if ($bookings->isEmpty()) {
            return view('no-booking-found');
        }

        return view('view-reservasi', compact('bookings'));
    }
    
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.history')->with([
            'message' => 'Sukses dihapus !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        Booking::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}

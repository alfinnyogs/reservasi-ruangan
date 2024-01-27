<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Arena;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $arenas = Arena::where('status', 1)->get();
        $arenaNumber = $request->get('number');

        return view('admin.bookings.create', compact('arenas','arenaNumber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $arena = Arena::findOrFail($request->arena_id);
    
        // Assuming $file is an instance of Illuminate\Http\UploadedFile
        if ($request->file('dokumen')) {
            $file = $request->file('dokumen');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            // Change the disk or path accordingly, for example, 'public'
            $file->move('assets/berkas', $nama_file,);
            $dokumen = $nama_file;
        }
    
        Booking::create([
            'user_id' => auth()->id(),
            'status' => !isset($request->status) ? 0 : $request->status,
            'dokumen' => $dokumen ?? null, // Set to null if no file is uploaded
            'arena_id' => $request->arena_id,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'keterangan' => $request->keterangan,
            // Add other fields from $request->validated() here
        ]);
    
        return redirect()->route('admin.bookings.index')->with([
            'message' => 'Sukses reservasi!',
            'alert-type' => 'success',
        ]);
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $arenas = Arena::where('status', 1)->get();

        return view('admin.bookings.edit', compact('booking','arenas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request,Booking $booking)
    {
        $arena = Arena::findOrFail($request->arena_id);

        $booking->update($request->validated() + [
            'user_id' => auth()->id(),
            'status' => !isset($request->status) ? 0 : $request->status
        ]);

        if($request->file('dokumen')){
            $file = $request->file('dokumen');
            $nama_file = time().str_replace("","",$file->getClientOriginalName());
            $file->move('berkas', $nama_file);
            $dokumen = $nama_file;
        }

        return redirect()->route('admin.bookings.index')->with([
            'message' => 'Sukses diupdate !',
            'alert-type' => 'Sukses'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with([
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

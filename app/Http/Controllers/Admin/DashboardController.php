<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Arena;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BookingRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\View;

class DashboardController extends Controller
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
    
    public function index(Request $request)
    {
        $bookings = [];
        $arenas = Arena::where('status', 1)->get();

        foreach ($this->sources as $source) {
            $models = $source['model']::where('status', '0')->get();
            
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                $crudFieldValueTo = $model->getOriginal($source['date_field_to']);
                $arena = Arena::findOrFail($model->getOriginal($source['number']));
                $user = User::findOrFail($model->getOriginal($source['field']));
                $timeBreak = \Carbon\Carbon::parse($crudFieldValueTo)->format('H:i');

                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }

                $bookings[] = [
                    'title' => trim($source['prefix'] . "($arena->number)" . $user->name . " ") . " " . $timeBreak,
                    'start' => $crudFieldValue,
                    'end' => $crudFieldValueTo,
                ];
            }
        }

        // Send $bookings data to the view
        return view('admin.dashboard', compact('bookings'));
    }
}




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $appends = [
        'berkas',
    ];
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getBerkasAttribute()
    {
        $file = $this->getMedia('berkas')->last();

        if ($file) {
            $file->url       = $file->getUrl();
        }

        return $file;
    }
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function arena(){
        return $this->belongsTo(Arena::class);
    }

    public function getStatusAttribute($input){
        return [
            0 => 'Sukses',
            1 => 'Selesai',
            2 => 'Batal',
            3 => 'Pending'
        ][$input];
    }

    public function getStatusCssAttribute()
{
    $statusCss = [
        0 => 'badge-info',
        1 => 'badge-success',
        2 => 'badge-danger',
        3 => 'badge-dark',
    ];

    return $statusCss[$this->attributes['status']];
}

}

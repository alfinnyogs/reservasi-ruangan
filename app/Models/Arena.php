<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Bool_;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Arena extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getStatusAttribute($input){
        return [
            0 => 'Digunakan',
            1 => 'Kosong'
        ][$input];
    }

    public function booking(){
        return $this->hasOne(Booking::class, 'arena_id');
    }
}

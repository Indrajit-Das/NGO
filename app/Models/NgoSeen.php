<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NgoSeen extends Model
{
    use HasFactory;
    protected $fillable = [
        'ngo_id',
        'notice_id',
        'seen_at',
        'updated_by',
        'comment'
    ];

    public function ngos(){
        return $this->belongsTo(Ngo::class,'ngo_id');
    }



}

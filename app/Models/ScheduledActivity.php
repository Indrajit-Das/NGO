<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduledActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity_date',
        'title',
        'description',
        'comment',
        'mark_grade',
        'ngo_id',
    ];

    public function ngo(){
        return $this->belongsTo(Ngo::class,'ngo_id');
    }
}

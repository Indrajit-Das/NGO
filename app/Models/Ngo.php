<?php

namespace App\Models;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    use HasFactory;

    public function user(){
         return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'english_name',
        'bangla_name',
        'address',
        'telephone',
        'phone',
        'fax',
        'email',
        'webAddress',
        'numberOfEmployees',
        'regNo',
        'user_id',
        'slug'
    ];

    public function NgoSeen(){
        return $this->belongsToMany(NgoSeen::class);
    }
}

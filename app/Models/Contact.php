<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function user_contacts(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

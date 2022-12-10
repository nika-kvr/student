<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}

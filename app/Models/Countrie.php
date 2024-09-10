<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function books(){
        return $this->hasManyThrough(Book::class, User::class); 
    }
}

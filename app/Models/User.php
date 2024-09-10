<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    // if we haven't already established foriegn key relation, we can pass values to 2nd and 3rd params to bind coloumns
    public function book(){
        return $this->hasMany(Book::class);
    }
}

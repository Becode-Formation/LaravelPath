<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    //
    protected $table = 'restaurants';
    protected $fillable = ['title', 'description'];
}

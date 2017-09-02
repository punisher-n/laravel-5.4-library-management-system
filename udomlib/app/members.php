<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $fillable = [
        'fname',
        'oname',
        'lanam',
        'email',
        'phone'
    ];
}

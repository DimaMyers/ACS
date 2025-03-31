<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'date',
        'last_name',
        'first_name',
        'middle_name'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    // Fillable fields
    protected $fillable = [
        'name',
        'description',
        'type_id',
    ];
}

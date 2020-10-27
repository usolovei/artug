<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'message', 'tel_number'
    ];

    protected $dates = [];

}

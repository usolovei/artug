<?php


namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Log
{
    use SoftDeletes;

    protected $fillable = [
        'type',
        'message',
    ];

    public $appends = [];

}

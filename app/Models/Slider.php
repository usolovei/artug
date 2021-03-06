<?php


namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'is_featured',
        'sort_order',
        'link'
    ];

    protected $image_settings = [];
    public $appends = ['photo_url'];
    protected $dates = [];

}

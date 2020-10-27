<?php


namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use Translatable, SoftDeletes;

    public $translatedAttributes = [
        'title', 'short_desc', 'description', 'meta_title', 'meta_description', 'meta_keyword'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'slug',
        'video_url',
        'book_url',
    ];

    protected $image_settings = [];
    public $appends = ['photo_url'];
    protected $dates = [];

    public function disciplines()
    {
        return $this->belongsToMany('App\Models\Game', 'tournament_game');
    }

    public function partners()
    {
        return $this->belongsToMany('App\Models\Partner', 'tournament_partner');
    }

}

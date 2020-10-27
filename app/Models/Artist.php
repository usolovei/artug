<?php


namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use Translatable, SoftDeletes;

    protected $table = 'artists_new';

    public $translatedAttributes = [
        'name', 'about', 'meta_title', 'meta_description', 'meta_keyword'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'slug',
        'is_featured',
        'genre',
        'banner_url'
    ];

    protected $image_settings = [];
    public $appends = ['banner_url'];
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

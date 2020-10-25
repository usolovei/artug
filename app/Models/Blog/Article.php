<?php


namespace App\Models\Blog;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article
{
    use Translatable, SoftDeletes;

    public $translatedAttributes = [
        'title', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'slug',
        'is_visible',
    ];

    protected $image_settings = [];
    public $appends = ['image_url'];
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

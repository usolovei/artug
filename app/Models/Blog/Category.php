<?php


namespace App\Models\Blog;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category
{
    protected $table = 'article_categories';

    use Translatable, SoftDeletes;

    public $translatedAttributes = [
     'title', 'description'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'slug',
    ];

    protected $image_settings = [];
    public $appends = [];
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

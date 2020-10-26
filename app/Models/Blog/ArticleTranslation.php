<?php


namespace App\Models\Blog;


use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword'];
}

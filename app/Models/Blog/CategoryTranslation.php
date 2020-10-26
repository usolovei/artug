<?php


namespace App\Models\Blog;


use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'description'];
}

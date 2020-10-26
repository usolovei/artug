<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PaintingTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'short_desc', 'description', 'meta_title', 'meta_description', 'meta_keyword'];
}

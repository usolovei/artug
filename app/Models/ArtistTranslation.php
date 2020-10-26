<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArtistTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'about', 'meta_title', 'meta_description', 'meta_keyword'];
}

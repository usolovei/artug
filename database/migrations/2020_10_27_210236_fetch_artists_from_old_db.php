<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FetchArtistsFromOldDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $artists = \Illuminate\Support\Facades\DB::select("
        SELECT * from artists
        ");

        foreach($artists as $artist) {

            if (!$model = \App\Models\Artist::where('slug', $artist->artist_alias)->get()->first()){
                \App\Models\Artist::create([
                    'slug' => $artist->artist_alias,
                    'is_featured' => $artist->favorite,
                    'banner_url' => $artist->img,
                    'genre' => $artist->picture_genre,
                    'en' => [
                        'name' => $artist->name_en,
                        'about' => $artist->about_en,
                        'meta_title' => $artist->meta_title_en,
                        'meta_description' => $artist->meta_description_en,
                        'meta_keyword' => $artist->meta_keyword_en,
                    ],
                    'ru' => [
                        'name' => $artist->name_ru,
                        'about' => $artist->about_ru,
                        'meta_title' => $artist->meta_title_ru,
                        'meta_description' => $artist->meta_description_ru,
                        'meta_keyword' => $artist->meta_keyword_ru,
                    ],
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::raw("DELETE FROM artists_new WHERE true");
    }
}

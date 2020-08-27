<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->boolean('is_available')->default(true);
            $table->string('photo_url')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('artist_id')->nullable();
            $table->integer('sled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paintings');
    }
}

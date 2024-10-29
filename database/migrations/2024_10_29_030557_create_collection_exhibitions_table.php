<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionExhibitionsTable extends Migration
{
    public function up()
    {
        Schema::create('collection_exhibition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('exhibition_id');
            $table->timestamps();

            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->foreign('exhibition_id')->references('id')->on('exhibitions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('collection_exhibition');
    }
}

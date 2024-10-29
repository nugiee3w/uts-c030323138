<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionExhibitionTable extends Migration
{
    public function up()
    {
        Schema::create('collection_exhibition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collection_id')->constrained('collections')->onDelete('cascade');
            $table->foreignId('exhibition_id')->constrained('exhibitions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collection_exhibition');
    }
}

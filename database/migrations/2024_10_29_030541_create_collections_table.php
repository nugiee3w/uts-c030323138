<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->date('acquisition_date')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('storage_location_id');
            $table->unsignedBigInteger('collector_id')->nullable();
            $table->string('condition', 50)->nullable();
            $table->decimal('estimated_value', 15, 2)->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('storage_location_id')->references('id')->on('storage_locations')->onDelete('cascade');
            $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('collections');
    }
}

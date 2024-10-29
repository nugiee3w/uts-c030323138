<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectorsTable extends Migration
{
    public function up()
    {
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collectors');
    }
}

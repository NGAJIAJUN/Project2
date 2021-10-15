<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('bidviews', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('client_name');
            $table->string('client_contact'); 
            $table->string('location');
            $table->double('budget');
            $table->string('style'); 
            $table->string('description'); 
            $table->string('thumbnail');
            $table->string('size');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('bidviews');
    }
}

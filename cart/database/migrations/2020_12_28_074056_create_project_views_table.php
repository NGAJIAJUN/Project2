<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectViewsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_views', function (Blueprint $table) {
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
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('project_views');
    }
}

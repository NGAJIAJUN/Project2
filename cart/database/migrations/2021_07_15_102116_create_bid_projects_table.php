<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_projects', function (Blueprint $table) {
            $table->id();
            $table->string('ID_detail_id'); //the project detail id
            $table->string('project_id')->unique(); //bid project id 
            $table->integer('bidamount')->unsigned();
            $table->string('design_id'); //designer of user id
            $table->string('designer_name');//designer name
            $table->string('designer_contact'); //designer contact 
            $table->string('client_id');
            $table->string('client_name');
            $table->string('client_contact');
            $table->string('comment');
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
        Schema::dropIfExists('bid_projects');
    }
}

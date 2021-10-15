<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignprojects', function (Blueprint $table) {
            $table->id();
            $table->string('ID_detail_id');
            $table->string('design_id'); 
            $table->string('designer_name');
            $table->string('designer_contact');
            $table->integer('reserve_price'); 
            $table->string('client_id');
            $table->string('client_name');
            $table->string('client_contact');
            $table->string('rating');
            $table->string('review');
            $table->string('image');
            $table->string('Status'); 
            $table->string('p_status');
            $table->string('c_status');  
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
        Schema::dropIfExists('assignprojects');
    }
}

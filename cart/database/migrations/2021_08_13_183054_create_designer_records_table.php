<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignerRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('designer_records', function (Blueprint $table) {
            $table->id();
            $table->string('ID_detail_id');
            $table->string('design_id'); 
            $table->string('designer_name');
            $table->string('client_id');
            $table->string('client_name');
            $table->string('client_contact');
            $table->string('location');
            $table->string('style');
            $table->string('rating');
            $table->string('review');
            $table->integer('reserve_price'); 
            $table->string('fee');
            $table->string('completeamount');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
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
        Schema::dropIfExists('designer_records');
    }
}

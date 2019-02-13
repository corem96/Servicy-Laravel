<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requested', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 10,2);
            $table->boolean('is_provided');

            $table->unsignedInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');

            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');

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
        Schema::dropIfExists('service_requested');
    }
}

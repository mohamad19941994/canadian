<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_service_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_service_id')->unsigned();
            $table->foreign('doctor_service_id')->references('id')->on('doctor_services')->onDelete('cascade');


            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('reasons')->nullable();
            $table->unique(['doctor_service_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_service_translations');
    }
};

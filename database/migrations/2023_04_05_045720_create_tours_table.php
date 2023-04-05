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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_place')->unsigned();
            $table->string('title');
            $table->string('short_description');
            $table->string('description');
            $table->integer('people_count');
            $table->integer('priсe');
            $table->string('main_img');
            $table->timestamps();

            $table->foreign('id_place')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
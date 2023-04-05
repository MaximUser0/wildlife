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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tour')->unsigned();
            $table->string('name');
            $table->date('date_born');
            $table->string('phone_number');
            $table->string('gmail');
            $table->bigInteger('card_number')->unsigned();
            $table->timestamps();

            $table->foreign('id_tour')
                ->references('id')
                ->on('tours')
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
        Schema::dropIfExists('requests');
    }
};

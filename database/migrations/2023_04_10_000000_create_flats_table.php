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
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('flat_id');
            $table->boolean('active');
            $table->integer('object_id');
            $table->string('street');
            $table->integer('number');
            $table->integer('code');
            $table->string('city');
            $table->string('full_name')->virtualAs('concat(object_id, \' \', street, \' \', number)');         
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
        Schema::dropIfExists('flats');
    }
};

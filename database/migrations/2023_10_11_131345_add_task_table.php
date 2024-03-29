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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id')->nullable();
            $table->string('title')->nullable();
            $table->text('info')->nullable();
            $table->enum('status', ['new', 'processing', 'canceled', 'done'])->default('new');
            $table->string('attachments')->nullable();
            $table->date('begin')->nullable();
            $table->date('end')->nullable();
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
        //
        Schema::dropIfExists('tasks');
    }
};

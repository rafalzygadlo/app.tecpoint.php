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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('hr')->nullable();
            $table->string('name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->virtualAs('concat(first_name, \' \', last_name)');
            
            $table->string('email')->unique()->nullable();
            $table->date('birth_date')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('pesel')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('telephone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default("45cm1jrmc429m0r9");
            $table->binary('img')->nullable();
            $table->boolean('status')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->string('api_token')->nullable();

            $table->index('email');
            $table->index('first_name');
            $table->index('last_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

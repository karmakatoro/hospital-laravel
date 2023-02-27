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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('user_type')->default(1);
            $table->date('date_of_birth');
            $table->string('gender');
            $table->unsignedBigInteger('country_id');
            $table->string("city");
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('affected_id');
            $table->integer('phone');
            $table->string('address');
            $table->string('avatar');
            $table->string('bio');
            $table->integer('status')->default(0);
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('affected_id')->references('id')->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
};

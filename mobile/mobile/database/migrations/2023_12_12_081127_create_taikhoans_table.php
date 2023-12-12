<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('taikhoans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matk');
            $table->string('fullname');
            $table->string('username');
            $table->string('email');
            $table->string('sdt');
            $table->string('matkhau');
            $table->string('diachi');
            $table->string('quyen');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taikhoans');
    }
};

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
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();
            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);
            //creamos el campo para albergar la llave foranea
            $table->unsignedBigInteger('user_id')->unique();  //unica
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')             //get null para no borrar y no funcionar
                ->onUpdate('cascade');

            $table->timestamps();  
            // Schema::create('profiles', function (Blueprint $table) {
            //     $table->id();
            //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

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
        Schema::create('libros_autores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idLibro');
            $table->unsignedBigInteger('idAutor');
            //FOREIGN KEY
            $table->foreign('idLibro')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('idAutor')->references('id')->on('autores')->onDelete('cascade');
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
        Schema::dropIfExists('libros_autores');
    }
};

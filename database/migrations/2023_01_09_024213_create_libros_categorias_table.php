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
        Schema::create('libros_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idLibro');
            $table->unsignedBigInteger('idCategoria');
            //FOREIGN KEY
            $table->foreign('idLibro')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('libros_categorias');
    }
};

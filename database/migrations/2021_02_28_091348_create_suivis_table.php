<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuivisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivis', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('libelle');
            $table->unsignedBigInteger('entree');
            $table->unsignedBigInteger('sortie');
            $table->unsignedbigInteger('initial')->nullable();
            $table->timestamps();

            // $table->foreign('initial')->references('id')->on('initials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suivis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('id_patient');
            $table->string('name');
            $table->string('surename');
            $table->string('initials');
            $table->date('birth_year');
            $table->enum('gender', ['M', 'F']);
            $table->integer('id_therapist')->unsigned();
            $table->timestamps();
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('id_therapist')
                ->references('id_therapist')
                ->on('therapist')
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
        Schema::dropIfExists('patients');
    }
}

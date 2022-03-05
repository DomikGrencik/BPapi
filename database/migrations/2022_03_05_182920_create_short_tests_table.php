<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_tests', function (Blueprint $table) {
            $table->id('id_short_test');
            $table->date('date');
            $table->float('DX');
            $table->integer('id_patient')->unsigned();
            $table->timestamps();
        });

        Schema::table('short_tests', function (Blueprint $table) {
            $table->foreign('id_patient')
                ->references('id_patient')
                ->on('patient')
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
        Schema::dropIfExists('short_tests');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id('id_test');
            $table->date('date');
            $table->float('DX');
            $table->biginteger('id_patient')->unsigned();
            $table->timestamps();
        });

        Schema::table('tests', function (Blueprint $table) {
            $table->foreign('id_patient')
                ->references('id_patient')
                ->on('patients')
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
        Schema::dropIfExists('tests');
    }
}

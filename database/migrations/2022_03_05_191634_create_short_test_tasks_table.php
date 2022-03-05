<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortTestTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_test_tasks', function (Blueprint $table) {
            $table->integer('id_short_test')->unsigned();
            $table->integer('id_task')->unsigned();
            $table->float('points');
            $table->timestamps();
        });

        Schema::table('short_test_tasks', function (Blueprint $table) {
            $table->primary(['id_short_test', 'id_task']);
            $table->foreign('id_short_test')
                ->references('id_short_test')
                ->on('short_tests')
                ->onDelete('cascade');
            $table->foreign('id_task')
                ->references('id_task')
                ->on('tasks')
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
        Schema::dropIfExists('short_test_tasks');
    }
}

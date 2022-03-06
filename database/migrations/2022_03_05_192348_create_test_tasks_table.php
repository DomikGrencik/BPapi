<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_tasks', function (Blueprint $table) {
            $table->biginteger('id_test')->unsigned();
            $table->biginteger('id_task')->unsigned();
            $table->float('points');
            $table->timestamps();
        });

        Schema::table('test_tasks', function (Blueprint $table) {
            $table->primary(['id_test', 'id_task']);
            $table->foreign('id_test')
                ->references('id_test')
                ->on('tests')
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
        Schema::dropIfExists('test_tasks');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id_task');
            $table->enum('category', ['F1', 'F2', 'F2']);
            $table->enum(
                'subcategory',
                [
                    'lips',
                    'jaw',
                    'tongue',
                    'respiration',
                    'resphiration_phonation',
                    'phonation',
                    'articulation',
                    'prosody',
                    'intelligibility'
                ]
            );
            $table->string('title');
            $table->string('description');
            $table->enum('test_type', ['T', 'ST']);
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
        Schema::dropIfExists('tasks');
    }
}

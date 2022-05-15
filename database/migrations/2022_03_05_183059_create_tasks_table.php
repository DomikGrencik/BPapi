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
            $table->enum('category', ['F1 - Faciokineze', 'F2 - Fonorespirace', 'F3 - Fonetika']);
            $table->enum(
                'subcategory',
                [
                    'Rty',
                    'Čelist',
                    'Jazyk',
                    'Respirace',
                    'Respirace při fonaci',
                    'Fonace',
                    'Artikulace',
                    'Prozódie',
                    'Srozumitelnost'
                ]
            );
            $table->string('title');
            $table->longText('description');
            $table->longText('evaluation');
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

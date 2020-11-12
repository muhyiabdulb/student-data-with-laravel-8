<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhjStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phj_students', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 8);
            $table->string('name');
            $table->date('birth_date');
            $table->string('gender');
            $table->integer('class_id');
            $table->string('phone', 15);
            $table->text('address');
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
        Schema::dropIfExists('phj_students');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_id');
            $table->string('email');
            $table->string('fothername');
            $table->string('mothername');
            $table->string('birthday');
            $table->string('presentaddress');
            $table->string('parmanentaddress');
            $table->string('gender');
            $table->string('batch');
            $table->string('department');
            $table->string('faculty');
            $table->string('campus');
            $table->string('CGPA');
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
        Schema::dropIfExists('student');
    }
}

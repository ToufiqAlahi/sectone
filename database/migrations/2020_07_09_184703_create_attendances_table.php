<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('department_id');
            $table->string('course_id');
            $table->string('student_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}

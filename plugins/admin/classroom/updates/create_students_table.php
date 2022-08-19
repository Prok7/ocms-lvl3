<?php namespace Admin\ClassRoom\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_classroom_students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("name");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_classroom_students');
    }
}
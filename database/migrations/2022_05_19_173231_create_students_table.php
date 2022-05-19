<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('idNumber', 13)->primary();
            $table->string('fullName', 40);
            $table->string('email', 20)->unique('email');
            $table->string('cell', 10)->unique('cell');
            $table->string('gender', 2);
            $table->string('subjectName', 20)->nullable()->index('subjectName');
            $table->string('password', 30);
            $table->integer('age')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->softDeletes()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

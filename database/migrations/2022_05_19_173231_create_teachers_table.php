<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('employeeID', 50)->primary();
            $table->string('schoolName', 80)->nullable()->index('schoolName');
            $table->string('studentName', 13)->nullable()->index('studentName');
            $table->string('idNumber', 13)->unique('idNumber');
            $table->string('subjectName', 20)->index('subjectName');
            $table->string('position', 20);
            $table->string('email', 20)->unique('email');
            $table->string('cell', 10)->unique('cell');
            $table->string('gender', 2);
            $table->string('password', 30);
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
        Schema::dropIfExists('teachers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign(['subjectName'], 'teachers_ibfk_1')->references(['SubjectCode'])->on('subjects')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['schoolName'], 'teachers_ibfk_2')->references(['schoolName'])->on('schools')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['studentName'], 'teachers_ibfk_3')->references(['idNumber'])->on('students')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign('teachers_ibfk_1');
            $table->dropForeign('teachers_ibfk_2');
            $table->dropForeign('teachers_ibfk_3');
        });
    }
}

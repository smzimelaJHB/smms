<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('schoolName', 80)->primary();
            $table->string('adress', 200);
            $table->string('email', 50)->nullable()->unique('email');
            $table->string('tel', 10)->nullable()->unique('tel');
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
        Schema::dropIfExists('schools');
    }
}

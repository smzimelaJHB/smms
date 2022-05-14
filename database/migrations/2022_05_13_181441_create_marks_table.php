<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('SubjectCode', 20)->index('SubjectCode');
            $table->decimal('grade', 3, 0);
            $table->char('mystatus', 1);
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
        Schema::dropIfExists('marks');
    }
}

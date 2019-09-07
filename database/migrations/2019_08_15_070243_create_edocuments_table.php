<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edocuments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('detail');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('typedocs');
            $table->string('image');
            $table->string('created_by');
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
        Schema::dropIfExists('edocuments');
    }
}

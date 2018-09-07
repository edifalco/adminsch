<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subfeatures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feature_id')->unsigned()->index();
            $table->integer('is_active')->default(1);
            $table->string('author');
            $table->string('title');
            $table->string('photo');
            $table->text('content');
            $table->integer('order');
            $table->timestamps();
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subfeatures');
    }
}

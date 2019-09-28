<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',10);
            $table->string('slug',60);            
            $table->string('description',200)->nullable();
            $table->bigInteger('create_user');          
            $table->softDeletes();
            $table->timestamps();
        });

    Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('description',200);
            $table->string('slug',60);
            $table->bigInteger('created_user');
            $table->bigInteger('updated_user');
        });
     Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('vpath',200);
            $table->bigInteger('article_id');
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
        Schema::dropIfExists('categories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->integer('quantity')->default(1);
            $table->text('description');
            $table->string('keywords');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('carrier_id');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('carrier_id')->references('id')->on('carriers');

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
        Schema::dropIfExists('transports');
    }
};

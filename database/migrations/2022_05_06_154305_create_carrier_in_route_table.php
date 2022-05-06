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
        Schema::create('carrier_in_route', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Day in route');
            $table->string('Location');
            $table->unsignedInteger('carrier_id');
            $table->unsignedInteger('route_id');

            $table->foreign('carrier_id')->references('id')->on('carriers');
            $table->foreign('route_id')->references('id')->on('routes');

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
        Schema::dropIfExists('carrier_in_route');
    }
};

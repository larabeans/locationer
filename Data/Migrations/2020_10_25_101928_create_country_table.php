<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('native');
            $table->string('alpha2', 2);
            $table->string('alpha3', 3);
            // $table->string('num', 3);
            $table->string('isd');
            $table->string('capital');
            $table->string('currency');
            $table->string('continent');
            $table->string('subcontinent');
            $table->string('emoji');
            $table->string('emoji_unicode');
            $table->timestamps();
            //$table->softDeletes();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
            //$table->softDeletes();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('state_id')->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('cities');
    }
}

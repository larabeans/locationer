<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            if (config('uuider.installed', false)) {
                $table->uuid('id')->primary('id');
            } else {
                $table->increments('id')->primary('id');
            }

            if (config('tenanter.installed', false)) {
                if (config('uuider.installed', false)) {
                    $table->uuid('tenant_id')->index('tenant_id_index');
                } else {
                    $table->increments('tenant_id')->primary('tenant_id_index');
                }
            }

            $table->uuidMorphs('locatable');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable()->default(null);
            $table->integer('city_id')->index('city_id_index');
            $table->integer('state_id')->index('state_id_index');
            $table->integer('country_id')->index('country_id_index');
            $table->string('post_code')->nullable()->default(null);
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
            $table->timestamps();
            //$table->softDeletes();
        });

        Schema::create('mobile_locations', function (Blueprint $table) {
            if (config('uuider.installed', false)) {
                $table->uuid('id')->primary('id');
            } else {
                $table->increments('id')->primary('id');
            }

            if (config('tenanter.installed', false)) {
                if (config('uuider.installed', false)) {
                    $table->uuid('tenant_id')->index('tenant_id_index');
                } else {
                    $table->increments('tenant_id')->primary('tenant_id_index');
                }
            }

            $table->uuidMorphs('locatable');
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('mobile_locations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Abierto');
            $table->string('name_en')->default('Open');
            $table->string('icon')->default('unlock');
            $table->string('color')->default('green');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('public_statuses');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity', function (Blueprint $table) {
            $table->id();
            $table->string('email_crm')->nullable();
            $table->string('title');
            $table->string('title_en');
			$table->foreignId('opportunityCategory_id')->constrained('opportunitycategories')->onDelete('cascade');
            $table->string('logo')->nullable();
            $table->string('location')->nullable();
            $table->string('location_en')->nullable();
            $table->string('slug')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('company')->nullable();
            $table->string('company_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->text('requirements')->nullable();
            $table->text('requirements_en')->nullable();
            $table->text('offered')->nullable();
            $table->text('offered_en')->nullable();
            $table->integer('confidential')->default(0);
            $table->foreignId('publicStatus_id')->default(1);
            $table->string('status')->default('active');
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
        Schema::dropIfExists('opportunity');
    }
}

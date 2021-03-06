<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_sponsor', function (Blueprint $table) {
          $table->integer('organization_id')->unsigned();
          $table->foreign('organization_id')->references('id')
                ->on('organizations')->onDelete('cascade');

          $table->integer('sponsor_id')->unsigned();
          $table->foreign('sponsor_id')->references('id')
                ->on('sponsors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_sponsor');
    }
}

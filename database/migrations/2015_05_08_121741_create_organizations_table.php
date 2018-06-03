<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('lead_description')->nullable(true);
            $table->string('link', 2083)->nullable(true);
            $table->string('mail')->unique();
            $table->string('telephone', 25)->nullable(true);
            $table->string('location_name')->nullable(true);
            $table->string('zip', 10)->nullable(true);
            $table->string('location')->nullable(true);
            $table->string('street')->nullable(true);
            $table->string('street_number', 7)->nullable(true);
            $table->string('donate_link', 2083)->nullable(true);
            $table->integer('user_id')->unsigned(); //1..n relation   //->unique(); if 1 to 0..1 relation
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('sponsor_message')->nullable(true);
            $table->string('logo')->nullable(true);
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
        Schema::dropIfExists('organizations');
    }
}

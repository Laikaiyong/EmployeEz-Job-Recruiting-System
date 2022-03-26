<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('resume');
            $table->foreignId('jobpostid');
            $table->string('jobpost_type');
            $table->string('jobpost_title');
            $table->string('jobpost_location');
            $table->string('jobpost_industry');
            $table->string('jobpost_cover');
            $table->foreignId('company_id');
            $table->string('company_name');
            $table->foreignId('user_id');
            $table->string('user_name');
            $table->text('additional_comments')->nullable();
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
        Schema::dropIfExists('applications');
    }
}

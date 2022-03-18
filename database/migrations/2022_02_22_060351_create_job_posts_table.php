<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('requirement');
            $table->string('location');
            $table->string('type');
            $table->string('company');
            $table->string('industry');
            $table->string('allowance')->nullable();
            $table->string('duration')->nullable();
            $table->string('cover_image_url')->nullable();
            $table->string('experience_level');
            $table->text('beneficial_skills');
            $table->string('closing_date');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('job_posts');
    }
}

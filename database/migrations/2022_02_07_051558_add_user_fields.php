<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('contact_number')->nullable();
            $table->boolean('online');
            $table->boolean('verified')->nullable();
            $table->string('title')->nullable();
            $table->string('department')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->foreignId('reporter_id')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->decimal('latitude', 8, 6)->nullable();
            $table->decimal('longitude', 9, 6)->nullable();
            $table->string('cover_image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('contact_number');
            $table->dropColumn('online');
            $table->dropColumn('verified');
            $table->dropColumn('department');
            $table->dropColumn('type');
            $table->dropColumn('reporter_id');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('url');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('latitude', 8, 6);
            $table->dropColumn('longitude', 9, 6);
            $table->dropColumn('cover_image_url');
         });
    }
}

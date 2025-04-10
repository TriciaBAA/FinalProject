<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeUserIdNullableInPhotographerComments extends Migration
{
    public function up()
    {
        Schema::table('photographer_comments', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();  // This makes the 'user_id' nullable
        });
    }

    public function down()
    {
        Schema::table('photographer_comments', function (Blueprint $table) {
            $table->integer('user_id')->nullable(false)->change();  // Revert to NOT NULL if needed
        });
    }
}

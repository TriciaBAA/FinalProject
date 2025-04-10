<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photographer_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('photographer_id');
            $table->string('name'); // name of commenter
            $table->text('comment');
            $table->integer('rating'); // 1 to 5
            $table->timestamps();
        
            $table->foreign('photographer_id')->references('id')->on('photographers')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photographer_comments');
    }
};

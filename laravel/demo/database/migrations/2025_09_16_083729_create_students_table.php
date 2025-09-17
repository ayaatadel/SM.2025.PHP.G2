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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('gender',['male','female']);
            $table->string('image')->nullable()->default("https://images.pexels.com/photos/35537/child-children-girl-happy.jpg");
            $table->integer('age')->min(18)->default(18);
            $table->string('address');
        // $table->unsignedBigInteger('track_id');
            // $table->foreign('track_id')->references('id')->on('tracks')->cascadeOnDelete()->cascadeOnUpdate();

        $table->foreignId('track_id')->nullable()->constrained()->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

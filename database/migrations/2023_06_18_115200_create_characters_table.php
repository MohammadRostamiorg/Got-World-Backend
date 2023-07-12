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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pic')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('born')->nullable();
            $table->string('died')->nullable();
            $table->string('culture')->nullable();
            $table->json('aliases')->nullable();
            $table->boolean('isFemale')->nullable();
            $table->json('children')->nullable();
            $table->string('playedBy')->nullable();
            $table->text('content')->nullable();
            $table->string('house')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

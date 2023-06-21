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
            $table->string('father');
            $table->string('mother');
            $table->string('born');
            $table->string('died');
            $table->string('culture');
            $table->json('aliases');
            $table->boolean('isFemale');
            $table->json('children');
            $table->string('playedBy');
            $table->text('content');
            $table->string('house');
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

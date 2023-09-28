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
        Schema::create('advices', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('advices1');
            $table->string('title2');
            $table->string('advices2');
            $table->string('title3');
            $table->string('advices3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advices');
    }
};

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
        Schema::create('new_users', function (Blueprint $table) {
            $table->id();                      // Primary key (auto-increment)
            $table->string('username')->unique();  // Username field (must be unique)
            $table->string('pass');            // Password field
            $table->timestamps();              // Adds created_at and updated_at columns

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_users');
    }
};

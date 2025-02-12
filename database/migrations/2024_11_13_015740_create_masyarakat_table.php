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
        Schema::create('masyaraka', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('telp', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};

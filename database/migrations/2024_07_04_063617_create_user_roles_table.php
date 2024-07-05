<?php

//  Membuat dan mengelola struktur tabel 'user_roles'
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
        // Digunakan untuk membuat tabel baru dengan nama 'user_roles'
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['admin', 'walisiswa', 'siswa'])->default('siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};

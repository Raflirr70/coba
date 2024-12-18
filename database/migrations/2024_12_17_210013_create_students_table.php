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
            $table->id(); // Primary key dengan auto_increment
            $table->bigInteger('user_id')->unsigned(); // Foreign key ke tabel users
            $table->year('entry_year'); // Tahun masuk
            $table->string('group', 2); // Grup dengan panjang 2 karakter
            $table->boolean('is_active'); // Status aktif (0/1)
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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

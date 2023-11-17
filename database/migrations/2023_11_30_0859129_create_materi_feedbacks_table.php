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
        Schema::create('materi_feedback', function (Blueprint $table) {
            $table->id();
            $table->text('feedback')->nullable();
            $table->text('kode_materi');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('materi_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_feedback');
    }
};

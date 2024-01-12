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
        Schema::table('juduls', function (Blueprint $table) {
            $table->boolean('is_done')->default(false);
        });
        Schema::create('lesson_attachments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('judul_id')->unsigned();
            $table->string('name');
            $table->text('file');
            $table->bigInteger('remarks_id')->unsigned();
            $table->string('remarks_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_attachments');
    }
};

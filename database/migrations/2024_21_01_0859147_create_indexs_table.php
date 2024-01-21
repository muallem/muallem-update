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
            $table->index('group', 'juduls_group_index');
            $table->index('student_id', 'juduls_student_id_index');
            $table->index('teacher_id', 'juduls_teacher_id_index');
            $table->index('last_seen', 'juduls_last_seen_index');
        });
        Schema::table('materis', function (Blueprint $table) {
            $table->index('kode_materi', 'materis_kode_materi_index');
            $table->index('student_id', 'materis_student_id_index');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->index('category_id', 'lessons_category_id_index');
        });
        Schema::table('lesson_details', function (Blueprint $table) {
            $table->index('lesson_id', 'lesson_details_lesson_id_index');
        });
        Schema::table('lesson_detail_attachments', function (Blueprint $table) {
            $table->index('lesson_detail_id', 'lesson_detail_attachments_lesson_detail_id_index');
            $table->index('student_id', 'lesson_detail_attachments_student_id_index');
            $table->index(['remarks_id', 'remarks_type'], 'lesson_detail_attachments_remarks_index');
        });
        Schema::table('lesson_detail_statuses', function (Blueprint $table) {
            $table->index('lesson_detail_id', 'lesson_detail_statuses_lesson_detail_id_index');
            $table->index('student_id', 'lesson_detail_statuses_student_id_index');
        });
    }
};

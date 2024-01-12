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
            $table->dropColumn('group');
            $table->bigInteger('category_id')->unsigned()->nullable()->default(null);
        });
    }
};

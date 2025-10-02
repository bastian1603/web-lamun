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
<<<<<<<< HEAD:database/migrations/2025_09_30_120121_create_reports_table.php
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->
            $table->foreignId('user_id')->constrained('users', 'user_id');

            $table->timestamps();
========
        Schema::create('report_pics', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('lamun_group_id')->constrained('lamun_groups', 'id')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamps();
>>>>>>>> a838485ed0c8e9874f463d1783aefb5d445cb656:database/migrations/2025_10_01_003502_create_report_pics_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2025_09_30_120121_create_reports_table.php
        Schema::dropIfExists('reports');
========
        Schema::dropIfExists('report_pics');
>>>>>>>> a838485ed0c8e9874f463d1783aefb5d445cb656:database/migrations/2025_10_01_003502_create_report_pics_table.php
    }
};

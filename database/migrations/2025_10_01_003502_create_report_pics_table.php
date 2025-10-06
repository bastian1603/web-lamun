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
        Schema::create('report_pics', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->foreignId('lamun_group_id')->constrained('lamun_groups', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('report_id')->constrained('reports', 'id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_pics');
    }
};

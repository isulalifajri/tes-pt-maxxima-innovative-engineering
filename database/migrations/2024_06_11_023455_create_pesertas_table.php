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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ujian_id')->nullable()->constrained()->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->string('nis');
            $table->foreign('nis')
                  ->references('nis')
                  ->on('siswas')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->integer('nilai');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};

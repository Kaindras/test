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
        Schema::create('naikkelas', function (Blueprint $table) {
            $table->id();
            $table->year('tahun')->nullable('true');
            $table->bigInteger('kelas_id')->unsigned()->cascadeOnDelete()->nullable()->default('1');
            $table->bigInteger('thnplajaran_id')->unsigned()->cascadeOnDelete()->nullable()->default('1');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnDelete();
            $table->bigInteger('user_id')->unsigned()->cascadeOnDelete()->nullable()->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naikkelas');
    }
};

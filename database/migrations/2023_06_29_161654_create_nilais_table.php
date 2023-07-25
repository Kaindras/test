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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nilai')->nullable('true');
            $table->string('predikat')->nullable('true');
            $table->string('deskripsi')->nullable('true');
            $table->bigInteger('mapel_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('semester_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('kelas_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('thnplajaran_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('user_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};

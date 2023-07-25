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
        Schema::create('ayahkandungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah')->nullable('true');
            $table->string('tmpt_ayah')->nullable('true');
            $table->date('tgl_ayah')->nullable('true');
            $table->string('agama_ayah')->nullable('true');
            $table->string('kwg_ayah')->nullable('true');
            $table->string('pndidikan_ayah')->nullable('true');
            $table->string('pkrjaan_ayah')->nullable('true');
            $table->string('pngeluaran_ayah')->nullable('true');
            $table->string('almt_ayah')->nullable('true');
            $table->string('nohp_ayah')->nullable('true');
            $table->string('hdp_mninggal_ayah')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayahkandungs');
    }
};

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
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wali')->nullable('true');
            $table->string('tmpt_wali')->nullable('true');
            $table->date('tgl_wali')->nullable('true');
            $table->string('agama_wali')->nullable('true');
            $table->string('kwg_wali')->nullable('true');
            $table->string('pndidikan_wali')->nullable('true');
            $table->string('pkrjaan_wali')->nullable('true');
            $table->string('pngeluaran_wali')->nullable('true');
            $table->string('almt_wali')->nullable('true');
            $table->string('nohp_wali')->nullable('true');
            $table->string('hdp_mninggal_wali')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};

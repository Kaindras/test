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
        Schema::create('ibukandungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu')->nullable('true');
            $table->string('tmpt_ibu')->nullable('true');
            $table->date('tgl_ibu')->nullable('true');
            $table->string('agama_ibu')->nullable('true');
            $table->string('kwg_ibu')->nullable('true');
            $table->string('pndidikan_ibu')->nullable('true');
            $table->string('pkrjaan_ibu')->nullable('true');
            $table->string('pngeluaran_ibu')->nullable('true');
            $table->string('almt_ibu')->nullable('true');
            $table->string('nohp_ibu')->nullable('true');
            $table->string('hdp_mninggal_ibu')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibukandungs');
    }
};

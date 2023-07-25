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
        Schema::create('perkembangans', function (Blueprint $table) {
            $table->id();
            $table->string('beasiswa_thn')->nullable('true');
            $table->string('beasiswa_kls')->nullable('true');
            $table->string('beasiswa_dari')->nullable('true');
            $table->date('tgl_tinggal_sklh')->nullable('true');
            $table->string('alasan_tinggal')->nullable('true');
            $table->string('lulus_pdk')->nullable('true');
            $table->string('no_tgl_ijasah')->nullable('true');
            $table->string('no_tgl_skhu')->nullable('true');
            $table->string('mlanjutkan_ke')->nullable('true');
            $table->string('bkerja_di')->nullable('true');
            $table->string('tgl_mulai_krja')->nullable('true');
            $table->string('nma_prshaan')->nullable('true');
            $table->string('penghasilan')->nullable('true');
           $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangans');
    }
};

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
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('tamat_dr')->nullable('true');
            $table->string('tgl_no_ijsh')->nullable('true');
            $table->string('tgl_no_skhu')->nullable('true');
            $table->string('lama_bljr')->nullable('true');
            $table->string('pdh_dr_sklh')->nullable('true');
            $table->string('alasan_pdh')->nullable('true');
            $table->string('dtrm_kelas')->nullable('true');
            $table->string('dtrm_bidang')->nullable('true');
            $table->string('dtrm_program')->nullable('true');
            $table->string('dtrm_komp')->nullable('true');
            $table->date('tgl_dtrima')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};

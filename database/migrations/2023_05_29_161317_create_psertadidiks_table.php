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
        Schema::create('psertadidiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable('true');
            $table->string('namapgl')->nullable('true');
            $table->string('nipd')->nullable('true');
            $table->string('nisn')->nullable('true');
            $table->string('jnsklmn')->nullable('true');
            $table->string('tempatlhr')->nullable('true');
            $table->date('tgllhr')->nullable('true');
            $table->string('agama')->nullable('true');
            $table->string('kwgnegaraan')->nullable('true');
            $table->string('anakke')->nullable('true');
            $table->string('jml_s_kd')->nullable('true');
            $table->string('jml_s_tr')->nullable('true');
            $table->string('jml_s_angkat')->nullable('true');
            $table->string('anky_yp_p')->nullable('true');
            $table->string('bhs')->nullable('true');
            $table->string('foto_in')->nullable();
            $table->string('foto_out')->nullable();
            $table->boolean('verifikasi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psertadidiks');
    }
};

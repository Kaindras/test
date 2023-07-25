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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id();
            $table->string('gol_drh')->nullable();
            $table->string('pnykit_yg_drt')->nullable('true');
            $table->string('kel_jasmani')->nullable('true');
            $table->string('tinggi')->nullable('true');
            $table->string('bb')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatans');
    }
};

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
        Schema::create('kegemarans', function (Blueprint $table) {
            $table->id();
            $table->string('kgm_kesenian')->nullable('true');
            $table->string('kgm_olhraga')->nullable('true');
            $table->string('kgm_orgnsasi')->nullable('true');
            $table->string('kgm_lain')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegemarans');
    }
};

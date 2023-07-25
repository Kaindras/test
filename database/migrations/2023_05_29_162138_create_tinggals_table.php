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
        Schema::create('tinggals', function (Blueprint $table) {
            $table->id();
            $table->string('almt')->nullable('true');
            $table->string('nohp')->nullable('true');
            $table->string('tinggaldgn')->nullable('true');
            $table->string('jrk_k_sklh')->nullable('true');
            $table->bigInteger('psertadidik_id')->unsigned()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tinggals');
    }
};

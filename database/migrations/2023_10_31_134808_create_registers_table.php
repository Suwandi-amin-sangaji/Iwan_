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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kapal');
            $table->string('email')->unique();
            $table->integer('no_hp')->unique();
            $table->integer('jumlah_penumpang');
            $table->bigInteger('cluster_id');
            $table->date('tanggal');
            $table->bigInteger('titik_selam_id');
            $table->bigInteger('waktu_id');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

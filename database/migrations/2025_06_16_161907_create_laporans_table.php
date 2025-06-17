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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_korban');
            $table->bigInteger('id_psikolog');
            $table->bigInteger('id_chatbox');
            $table->string('judul');
            $table->string('keterangan');
            $table->string('balasan')->nullable();
            $table->bigInteger('bukti_img')->nullable();
            $table->enum('status',['belum_dibaca','process','selesai']);
            $table->foreign('id_korban')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('id_psikolog')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('id_chatbox')->references('id')->on('imgs')->onDelete('no action')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};

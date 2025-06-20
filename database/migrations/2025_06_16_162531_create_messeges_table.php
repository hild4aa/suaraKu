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
        Schema::create('messeges', function (Blueprint $table) {
            $table->id();
            $table->string('messege');
            $table->bigInteger('id_chatbox');
            $table->foreign('id_chatbox')->references('id')->on('chatboxes')->onDelete('no action')->onUpdate('cascade');
            $table->bigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messeges');
    }
};

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
        Schema::create('user__visits', function (Blueprint $table) {
            $table->unsignedBigInteger('uid')->nullable(false);
            $table->integer('oid')->nullable(false);
            $table->timestamps();
            $table->foreign('uid')->references('id')->on('users');
            $table->foreign('oid')->references('id')->on('international');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__visits');
    }
};

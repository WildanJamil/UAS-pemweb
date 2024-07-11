<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaskesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nama_pengelola', 45);
            $table->string('alamat', 100);
            $table->string('website', 45);
            $table->string('email', 45);
            $table->unsignedBigInteger('kabkota_id');
            $table->foreign('kabkota_id')->references('id')->on('kabkota')->onDelete('cascade')->onUpdate('cascade');
            $table->double('rating');
            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedBigInteger('jenis_faskes_id');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('jenis_faskes_id')->references('id')->on('jenis_faskes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kategori_id')->references('id')->on('jenis_faskes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
}

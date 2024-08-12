<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('informasi_pribadi', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('tempatLahir');
    $table->date('tanggalLahir');
    $table->string('email');
    $table->string('noHp');
    $table->string('alamat');
    $table->string('gender');
    $table->text('deskripsi');
    $table->string('uploadFoto')->nullable();
    $table->timestamps();
});

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pribadis');
    }
};

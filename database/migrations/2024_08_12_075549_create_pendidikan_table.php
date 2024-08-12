<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanTable extends Migration
{
    public function up(): void
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan');
            $table->string('namasekolah');
            $table->date('tanggalmasuk');
            $table->date('tanggallulus');
            $table->string('gelar')->nullable();
            $table->string('ipk')->nullable();
            $table->string('nilaiRataRata')->nullable();
            $table->string('alamatlengkap');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
}

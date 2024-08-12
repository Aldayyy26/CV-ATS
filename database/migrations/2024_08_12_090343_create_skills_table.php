<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('bidang');
            $table->string('posisikerja');
            $table->string('keahlian');
            $table->text('deskripsi');
            $table->text('keterampilan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
}

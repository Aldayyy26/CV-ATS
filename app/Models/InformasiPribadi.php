<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiPribadi extends Model
{
    protected $table = 'informasi_pribadi'; // Make sure this is correct

    protected $fillable = [
        'nama', 'tempatLahir', 'tanggalLahir', 'email', 'noHp', 'alamat', 'gender', 'deskripsi', 'uploadFoto'
    ];
}

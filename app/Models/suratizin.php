<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratizin extends Model
{
    use HasFactory;
    protected $fillable = [ 'tujuan_surat','tanggal','nama_siswa','kelas','alamat_siswa','isi','penulis_surat' ];
    protected $table = 'suratizin';
    public $timestamps = false;
}

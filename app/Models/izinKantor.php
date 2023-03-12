<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izinKantor extends Model
{
    use HasFactory;
    protected $fillable = [ 'nama_kantor','alamat_kantor','tanggal','nama','jabatan','alamat_pemohon','isi' ];
    protected $table = 'izinkantor';
    public $timestamps = false;
}

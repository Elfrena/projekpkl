<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $fillable = array('id','nip','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','telepon','email','status_nikah','alamat','jabatan','foto','updated_at','created_at');
}

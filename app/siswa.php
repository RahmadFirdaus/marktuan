<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['nama','umur','kelas'];
    protected $visible = ['nama','umur','kelas'];
    public $timestamps = true;
}

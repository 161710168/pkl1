<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikels extends Model
{
    protected $table='artikels';

    protected $fillable=['judul','gambar','deskripsi'];

    public $timestamps= true;
}

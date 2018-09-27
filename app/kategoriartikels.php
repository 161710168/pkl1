<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriartikels extends Model
{
    protected $table='kategoriartikels';

    protected $fillable=['nama_kategori'];

    public $timestamps= true;
}

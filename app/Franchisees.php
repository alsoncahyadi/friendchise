<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchisees extends Model
{
    //
    protected $table = 'Franchisees';

    protected $fillable = [
    	'nama',
    	'alamat',
    	'kecamatan',
    	'kota',
    	'username',
    	'password',
    	'jualtahu',
    	'stoktahu'
    ];
}

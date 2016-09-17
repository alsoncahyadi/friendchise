<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchisees extends Model
{
    //
    protected $table = 'franchisees';

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

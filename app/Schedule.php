<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = 'schedules';

    protected $primary_key = 'id_franchisee';

    protected $fillable = [
    	'id_franchisee',
    	'nama',
    	'tanggal',
    	'jumlahkirim',
    ];

    public function franchisee() {
    	return $this->belongsTo('App\Franchisees', 'id_franchisee');
    }
}

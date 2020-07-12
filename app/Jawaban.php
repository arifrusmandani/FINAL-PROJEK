<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User','penjawab_id');
    }

    public function komentar()
    {
        return $this->hasMany('App\Komenjawaban','jawaban_id');
    }
}

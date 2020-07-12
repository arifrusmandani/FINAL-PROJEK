<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komenjawaban extends Model
{
    protected $table = "komentar_jawaban";
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User','pengomentar_id');
    }

    public function jawaban()
    {
    	return $this->belongsTo('App\User','jawaban_id');
    }

}

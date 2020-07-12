<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komenpertanyaan extends Model
{
    protected $table = "komentar_pertanyaan";
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User','pengomentar_id');
    }
}

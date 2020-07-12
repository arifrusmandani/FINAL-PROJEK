<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User','penanya_id');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag','pertanyaan_tag','pertanyaan_id','tag_id');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban','pertanyaan_id');
    }

    public function komentar()
    {
        return $this->hasMany('App\Komenpertanyaan','pertanyaan_id');
    }
}

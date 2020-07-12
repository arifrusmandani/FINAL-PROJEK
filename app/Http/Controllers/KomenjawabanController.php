<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Komenjawaban;

class KomenjawabanController extends Controller
{
    public function store(Request $request, $id_jawaban)
    {
    	$data = array(
    		'isi' => $request->komentar_jawaban,
    		'pengomentar_id' => Auth::user()->id,
    		'jawaban_id' => $id_jawaban
    	);

    	$input_komen = Komenjawaban::create($data);

    	return back();
    }

    public function destroy($id)
    {
        $data = Komenjawaban::find($id)->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use Auth;

class JawabanController extends Controller
{
    public function store(Request $request, $id_pertanyaan)
    {
    	$data = array(
    		'isi' => $request->jawaban,
    		'penjawab_id' => Auth::user()->id,
    		'is_selected' => 0,
    		'pertanyaan_id' => $id_pertanyaan
    	);

    	$input_jawaban = Jawaban::create($data);

    	return back();
    }

    public function destroy($id)
    {
        $data = Jawaban::find($id)->delete();
        return back();
    }

    public function edit(Request $request, $id)
    {
        $answer = Jawaban::find($id);
        return view('pertanyaan.edit_jawaban',compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $data_update = Jawaban::whereId($id)->update(['isi' => $request->jawaban]);
        return back();
    }
}

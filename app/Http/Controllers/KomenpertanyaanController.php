<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Komenpertanyaan;

class KomenpertanyaanController extends Controller
{
    public function store(Request $request, $id_pertanyaan)
    {
    	$data = array(
    		'isi' => $request->komentar_pertanyaan,
    		'pengomentar_id' => Auth::user()->id,
    		'pertanyaan_id' => $id_pertanyaan
    	);

    	$input_komen = Komenpertanyaan::create($data);

    	return back();
    }

    public function edit(Request $request, $id)
    {
    	$ask_komen = Komenpertanyaan::find($id);
    	return view('pertanyaan.edit_komen',compact('ask_komen'));
    }

    public function update(Request $request, $id)
    {
    	$data_update = Komenpertanyaan::whereId($id)->update(['isi' => $request->komentar_pertanyaan]);
    	return back();
    }

    public function destroy($id)
    {
        $data = Komenpertanyaan::find($id)->delete();
        return back();
    }
}

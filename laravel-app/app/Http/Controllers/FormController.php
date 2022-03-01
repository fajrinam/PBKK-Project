<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'nrp' => 'required|numeric|min:5',
           'usia' => 'required|numeric',
           'alamat' => 'required|min:3|max:50',
           'noHp' => 'required|numeric|min:3',
           'gambar' => 'required'
        ]);
 
        return view('proses',['data' => $request]);
        return redirect('/input')->withSuccess('Data berhasil disimpan!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function indexx()
    {
        $data = Konsultasi::all();
        return view('tabelkonsultasi', compact('data'));
    }

    public function index()
    {
        $data = Konsultasi::all();
        return view('konfirm', compact('data'));
    }

    public function konsultasi()
    {
        return view('konsultasi');
    }

    public function createdata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'nohp' => 'required',
            'keluhan' => 'required',
        ]);

        Konsultasi::create($request->all());
        return redirect()->route('konfirm')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Konsultasi::find($id);
        return view('tampildata', compact('data'));
    }
     public function delete($id){
        $data = Konsultasi::find($id);
        $data->delete();
        return redirect()->route('tabelkonsultasi')->with('success','Data berhasil di delete');
    }
}
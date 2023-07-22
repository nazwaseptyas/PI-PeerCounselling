<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KonsultasiController extends Controller
{
    public function indexx()
    {
        $data = Konsultasi::all();
        return view('tabelkonsultasi', compact('data'));
    }

    public function index()
{
    // Get the logged-in user
    $user = Auth::user();

    // Get the consultations associated with the user
    $data = $user->konsultasis;
    // dd($data);

    return view('konsultasi', compact('data'));
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

                Konsultasi::create([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'tanggal' => $request->tanggal,
                    'nohp' => $request->nohp,
                    'keluhan' => $request->keluhan,
                ]);
                
                return redirect()->route('konsultasi')->with('success', 'Data berhasil ditambahkan');
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

    public function indexz()
    {
        $data = Konsultasi::all();
        return view('konfirm', compact('data'));
    }
    public function confrimdata(Request $request){
        // dd($request->all());
          Konsultasi::create($request->all());
          return redirect()->route('konfirm')->with('success','Data berhasil di Tambahkan');
        }
public function searchcon(Request $request)
    {
        $q = $request->input('q');
        $data = Konsultasi::where('nama', 'LIKE', '%' . $q . '%')
            ->orWhere('tanggal', 'LIKE', '%' . $q . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('searchcon', compact('data'));
    }

}
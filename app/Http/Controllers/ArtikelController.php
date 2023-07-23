<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\User; // Pastikan sudah diimpor

class ArtikelController extends Controller
{
    public function indexxx()
    {
        $data = Artikel::paginate(3);
        return view('artikel', compact('data'));
    }
    public function indexxxx()
    {
        $data = Artikel::paginate(3);
        return view('tabelartikel', compact('data'));
    }

    public function tambahArtikel()
{
    $data = null; // Beri nilai default null, atau isi dengan data jika diperlukan
    return view('tambahartikel', compact('data'));
}


    public function simpanArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required|date',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');

        Artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'isi' => $request->isi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function detail($id)
    {
        $data = Artikel::find($id);
        return view('detail', compact('data'));
    }

    public function delete($id)
    {
        $data = Artikel::find($id);
        $data->delete();
        return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil dihapus');
    }

    // public function tampilkandata($id)
    // {
    //     $data = Artikel::find($id);
    //     return view('tampilkandata', ['data' => $data]);
    // }
    public function search(Request $request)
{
    $keyword = $request->input('q');

    // Lakukan pencarian berdasarkan judul artikel
    $data = Artikel::where('judul', 'LIKE', '%' . $keyword . '%')->get();

    // Debugging untuk memastikan data hasil pencarian
    // dd($data);

    return view('search', compact('data', 'keyword'));
}

public function tampilkanartikel($id)
    {
        $data = Artikel::find($id);
        return view('tampilartikel', compact('data'));
    }
 public function updateArtikel(Request $request, $id)
{
    $data = Artikel::find($id);

    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'tanggal' => 'required|date',
        'isi' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Jika ada gambar yang diunggah, simpan gambar baru
    if ($request->hasFile('gambar')) {
        // Menghapus gambar lama jika ada
        Storage::delete('public/' . $data->gambar);

        // Simpan gambar baru ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambar;
    }

    $data->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi,
    ]);

    return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil diupdate');
}


}
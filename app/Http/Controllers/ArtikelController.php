<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel; // use model
use PDF;

class ArtikelController extends Controller
{
    public function index()
    {
      return view ('index');
    }

    public function tampil(){
  		$artikels = Artikel::all();
  		return view('Data.tampil', ['artikel' => $artikels]);
  	}

    public function create(){
  		return view('Data.create');
  	}

    public function insert(Request $request){
  		$artikel = new Artikel;
      $artikel->no = $request->no;
  		$artikel->judul = $request->judul;
      $artikel->isi = $request->isi;
      $artikel->tahun = $request->tahun;
  		$artikel->save();

  		return redirect(Route('tampil'))->with('alert-success','Berhasil Menambahkan Data!');
  	}

    public function delete($id){
  		$artikel = Artikel::findOrFail($id);

  		$artikel->delete();
  		return redirect(Route('tampil'))->with('success','Data berhasil dihapus');
  	}

    public function edit($id){
  		$artikel = Artikel::findOrFail($id);
  		return view('Data.edit', ['artikel' => $artikel]);
  	}

    public function submitedit(Request $request, $id){
  		$artikel = Artikel::findOrFail($id);
      $artikel->no = $request->no;
      $artikel->judul = $request->judul;
      $artikel->isi = $request->isi;
      $artikel->tahun = $request->tahun;
      $artikel->save();

  		return redirect(Route('tampil'))->with('alert-success','Berhasil Merubah Data!');
  	}

    //Pencarian
    public function search(Request $request){
  		$search = $request->get('search');
      $result = Artikel::where('judul', 'LIKE', '%'.$search.'%')->paginate(10);
  		return view('data.result', compact('search', 'result'));
  	}

    //Cetak Data
    public function print(){
      $artikel = Artikel::all();
      $pdf=PDF::loadView('data.print', ['artikel' => $artikel]);
      return $pdf->setPaper('a3', 'landscape')->stream();
    }
}

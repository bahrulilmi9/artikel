<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class DepanController extends Controller
{
    public function index()
    {
      return view ('index');
    }

    public function tampil(){
  		$anggotas = Anggota::all();
  		return view('Data.tampil', ['anggota' => $anggotas]);
  	}

  	public function create(){
  		return view('Data.create');
  	}

  	public function insert(Request $request){
  		$anggota = new Anggota;
      $anggota->anggota_id = $request->anggota_id;
  		$anggota->nama = $request->nama;
  		$anggota->tempat_lahir = $request->tempat_lahir;
  		$anggota->tanggal_lahir = $request->tanggal_lahir;
      $anggota->alamat = $request->alamat;
  		$anggota->save();

  		return redirect(Route('tampil'))->with('alert-success','Berhasil Menambahkan Data!');
  		// return redirect()->route('index');
  		// return redirect()->action('BarangController@index');
  		// return Redirect::action('BarangController@index');
  	}

  	public function delete($id){
  		$anggota = Anggota::findOrFail($id);
  		// dd($barang);
  		$anggota->delete();
  		return redirect(Route('tampil'))->with('success','Data berhasil dihapus');
  	}

  	public function edit($id){
  		$anggota = Anggota::findOrFail($id);
  		return view('Data.edit', ['anggota' => $anggota]);
  	}

  	public function submitedit(Request $request, $id){
  		$anggota = Anggota::findOrFail($id);
      $anggota->anggota_id = $request->anggota_id;
      $anggota->nama = $request->nama;
  		$anggota->tempat_lahir = $request->tempat_lahir;
  		$anggota->tanggal_lahir = $request->tanggal_lahir;
      $anggota->alamat = $request->alamat;
  		$anggota->save();

  		return redirect(Route('tampil'))->with('alert-success','Berhasil Merubah Data!');
  	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{	
	public function search(Request $request){
		$search = $request->get('cari');
		$result = Mahasiswa::where('nama','LIKE','%'.$search.'%')->paginate(10);
		return view('Data.result', compact('search', 'result'));
	}

    public function index()
    {
    	return view ('index');
    }

    public function dashboard(){
		$mahasiswas = Mahasiswa::all();
		return view('Data.dashboard', ['mahasiswa' => $mahasiswas]);
	}

	public function create(){
		return view('Data.create');
	}

	public function insert(Request $request){
		$mahasiswa = new Mahasiswa;
		$mahasiswa->nis = $request->nis;
		$mahasiswa->nama = $request->nama;
		$mahasiswa->jenis_kelamin = $request->jenis_kelamin;
		$mahasiswa->alamat = $request->alamat;
		$mahasiswa->asal_sekolah = $request->asal_sekolah;
		$mahasiswa->nama_prodi = $request->nama_prodi;
		$mahasiswa->save();

		return redirect(Route('dashboard'))->with('alert-success','Berhasil Menambahkan Data!');
		// return redirect()->route('index');
		// return redirect()->action('BarangController@index');
		// return Redirect::action('BarangController@index');
	}

	public function delete($id){
		$mahasiswa = Mahasiswa::findOrFail($id);
		// dd($barang);
		$mahasiswa->delete();
		return redirect(Route('dashboard'))->with('success','Data berhasil dihapus');
	}

	public function edit($id){
		$mahasiswa = Mahasiswa::findOrFail($id);
		return view('Data.edit', ['mahasiswa' => $mahasiswa]);
	}

	public function submitedit(Request $request, $id){
		$mahasiswa = Mahasiswa::findOrFail($id);

		$mahasiswa->nis = $request->nis;
		$mahasiswa->nama = $request->nama;
		$mahasiswa->jenis_kelamin = $request->jenis_kelamin;
		$mahasiswa->alamat = $request->alamat;
		$mahasiswa->asal_sekolah = $request->asal_sekolah;
		$mahasiswa->nama_prodi = $request->nama_prodi;
		$mahasiswa->save();

		return redirect(Route('dashboard'))->with('alert-success','Berhasil Merubah Data!');
	}

}

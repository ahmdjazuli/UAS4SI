@extends('Data.Layouts.Master')
@section('content')
<div class="container">
<div class="jumbotron">
    <h2 style="text-align: center;">EDIT DATA <b>MAHASISWA BARU</b></h2>
</div> {{-- akhir jumbotron --}}
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $mahasiswa->id]) }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-3 control-label" for="nis">NIS</label>
        <div class="col-md-6">
          <input name="nis" type="text" placeholder="Nis" class="form-control" value="{{$mahasiswa->nis}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="nama">Nama</label>
        <div class="col-md-6">
          <input name="nama" type="text" placeholder="Nama" class="form-control" value="{{$mahasiswa->nama}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="jenis kelamin">Jenis Kelamin</label>
        <div class="col-md-6">
          <input name="jenis_kelamin" type="text" placeholder="Jenis Kelamin" class="form-control" value="{{$mahasiswa->jenis_kelamin}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="alamat">alamat</label>
        <div class="col-md-6">
          <input name="alamat" type="text" placeholder="Alamat" class="form-control" value="{{$mahasiswa->alamat}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="asal sekolah">Asal Sekolah</label>
        <div class="col-md-6">
          <input name="asal_sekolah" type="text" placeholder="Asal Sekolah" class="form-control" value="{{$mahasiswa->asal_sekolah}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="nama prodi">Nama Prodi</label>
        <div class="col-md-6">
          <input name="nama_prodi" type="text" placeholder="Nama Prodi" class="form-control" value="{{$mahasiswa->nama_prodi}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-9 text-right">
          <a href="{{ Route('dashboard') }}">
             <button type="button" class="btn btn-danger"><span class="
glyphicon glyphicon-backward"></span> Batal</button>
           </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
  </div> {{-- kontainer --}}
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}

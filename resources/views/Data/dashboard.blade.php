@extends('Data.Layouts.Master')
@section('content')
<div class="container">
  <div class="jumbotron">
    <h2 style="text-align: center;">SELAMAT DATANG DI HALAMAN DATA <b>MAHASISWA BARU</b></h2>
    <div id="faq" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="questionOne">
  <h5 class="panel-title">
  <a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="true" aria-controls="answerOne">
  <span class="glyphicon glyphicon-list"></span> Petunjuk 1
  </a>
  </h5>
  </div>
  <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
  <div class="panel-body">
  Klik tombol <a class="btn btn-primary" href="#"><span class="
glyphicon glyphicon-check"></span> Tambah Data MABA</a> untuk menuju Form pengisian Data Mahasiswa Baru.
  </div>
  </div>
  </div>

  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="questionTwo">
  <h5 class="panel-title">
  <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
  <span class="glyphicon glyphicon-list"></span> Petunjuk 2
  </a>
  </h5>
  </div>
  <div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
  <div class="panel-body">
  Apabila ingin mengubah nilai dari data yang salah ketika memasukkan DATA, klik tombol <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a> pada salah satu data.
  </div>
  </div>
  </div>

  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="questionThree">
  <h5 class="panel-title">
  <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="false" aria-controls="answerThree">
  <span class="glyphicon glyphicon-list"></span> Petunjuk 3
  </a>
  </h5>
  </div>
  <div id="answerThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionThree">
  <div class="panel-body">
  Sedangkan untuk menghapus Data, klik tombol <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Hapus</a> Mudah, kan? 😉
  </div>
  </div>
  </div>

  </div>

  </div> {{-- akhir jumbotron --}}
  <div class="col-md-12 col-sm-12">
  <form action="{{ Route('search') }}" action="GET">
      <div class="form-group">
        <a style="float: left;" class="btn btn-primary" href="{{ Route('create') }}"><span class="
glyphicon glyphicon-check"></span> Tambah Data MABA</a>
        <input id="cari" style="margin-left:10px; width: auto; max-width: 75%; float: left" name="cari" type="text" class="form-control" placeholder="Cari Data MABA">
        {{-- <input type="submit" style="margin-left:10px;" class="btn btn-primary" value="Cari"><span class="glyphicon glyphicon-eject"></span></input> --}}
        <button type="submit" class="btn btn-primary" style="margin-left:10px;">Cari <span class="glyphicon glyphicon-search"></span></button>
      </div>
  </form>
</div>

	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Nama Prodi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($mahasiswa as $datamahasiswa)
        {{-- expr --}}
        <tr>
          <td>{{$datamahasiswa->nis}}</td>
          <td>{{$datamahasiswa->nama}}</td>
          <td>{{$datamahasiswa->jenis_kelamin}}</td>
          <td>{{$datamahasiswa->alamat}}</td>
          <td>{{$datamahasiswa->asal_sekolah}}</td>
          <td>{{$datamahasiswa->nama_prodi}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $datamahasiswa->id]) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $datamahasiswa->id]) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}

          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
  </div>
@endsection
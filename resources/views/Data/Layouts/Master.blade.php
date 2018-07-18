<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latihan Laravel</title>
    <link href="/Public-User/css/bootstrap.min.css" rel="stylesheet">
    <style>
      th{text-align: center;}
    </style>
  </head>
  <body>
    <div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Uniska Offcial</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/#page-top"><span class="
glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="/#about"><span class="glyphicon glyphicon-knight"></span> Motivasi</a></li> 
      <li><a href="/#services"><span class="glyphicon glyphicon-user"></span> Anggota </a></li>
      <li><a href="/#contact"><span class="glyphicon glyphicon-book"></span> Kontak</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>
    {{-- <div class="container">
      <div class="row">
        <hr>
          <nav class="navbar">

            <ul class="nav navbar-nav">
              <li><a href="{{ Route('index') }}">Data Mahasiswa Baru</a></li>

            </ul>
          </nav>
        <hr>
      </div> --}}
      {{-- kontennyya --}}
      <div class="row">
        @yield('content')
      </div>
      {{-- kontennyya --}}

      <footer style="text-align:center; bottom: 0px; width: 100%; left: 0px; right: 0px; margin-bottom: 0px;">
        <strong>MADE WITH <svg style="position: relative; top: 5px; width: 20px;" viewBox="0 0 24 24">
    <path fill="#F2A9BA" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
</svg> <a href="/dashboard">UNISKA OFFICIAL</a></strong>
      </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public-User/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
  </head>
  <body>

    <a href="{{ Route('index') }}">Data Barang</a> |
    <a href="">Keterangan</a>

    <hr>
    @yield('content')
    <hr>

    <footer>FTI UNISKA 2018</footer>

  </body>
</html>
 --}}

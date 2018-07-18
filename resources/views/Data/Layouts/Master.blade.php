<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latihan Laravel</title>
    <link href="/Public-dedy/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body bgcolor: "gray;">

    <div class="container">
      <div class="row">
        <hr>
          <nav class="navbar">
            <ul class="nav navbar-nav">
              <li><a href="{{ Route('tampil') }}">Data Artikel</a></li>
              <li><a href="{{ Route('print') }}">Cetak</a></li>
              <form class="" action="{{ Route('search') }}" method="get">
                <div class="col-md-3" style="Float: right; margin-top: 7px;">
                  <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                      <span class="input-group-btn">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>Cari</button>
                        </span>
                      </span>
                  </div>
                </div>
              </form>
            </ul>
          </nav>
        <hr>
      </div>
      <div class="row">
        @yield('content')
      </div>

      <div class="row">
        <a href="#">Teknologi Informasi</a>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public-dedy/js/bootstrap.min.js"></script>
  </body>
</html>

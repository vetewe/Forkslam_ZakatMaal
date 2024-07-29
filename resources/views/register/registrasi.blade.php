<!doctype html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="gambar/logo.png" rel="shorcut icon">
    <title>FORKALAM | REGISTRASI</title>
    </head>
    <body>
    <header class="fixed-top">
      <div class="logo">
          <a href="/forkalam">
            <img src="gambar/logo.png" width="50" height="50">
          </a>
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="mainicon">
          <div class="menu">
              <i class="bi bi-list"></i>
          </div>
      </label>
      <nav class="navbar navbar-expand-sm fixed-top ">
        <a href="/kalkulator" class="active">kalkulator</a>
      </nav>
    </header>
    <br><br>
    <br><br>
    <div class="container">
      <h1 style="color:#FFF">isi biodata anda</h1><br><br>
      <form class="row g-3" action="/registrasi" method="post">
      @csrf
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label" style="color:#FFF">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror"   id="email" name="email" placeholder="av@gmail.com">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label" style="color:#FFF">Nama Lengkap</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="av">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label" style="color:#FFF">No Telpon</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" placeholder="08000000000">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label" style="color:#FFF">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Jl.papua">
        </div>
        <div class="col-md-6">
          <label for="jk" class="form-label" style="color:#FFF">Jenis kelamin</label>
          <select id="jk" name="jk" class="form-select @error('jk') is-invalid @enderror" placeholder="pilih">
            <option>laki laki</option>
            <option>perempuan</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success">lanjut</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
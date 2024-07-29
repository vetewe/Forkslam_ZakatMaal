<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="gambar/logo.png" rel="shorcut icon">
    <title>FORKALAM | DANA</title>
  </head>
  <body>
    <header class="">
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
    </header>
    <br>
    <div class="container">
        <h2 style="color:#FFF">isi&konfirmasi ulang</h2>
        <center>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="gambar/dana.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">mohon kirimkan bukti pembayaran anda ke nomor whatsapp berikut:</h5>
                          <p class="card-text">089654100257</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="gambar/gopay.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">mohon kirimkan bukti pembayaran anda ke nomor whatsapp berikut:</h5>
                          <p class="card-text">089654100257</p>
                        </div>
                      </div>
                </div>
              </div><br><br>
        </center>
        <form class="row g-3" action="/dana" method="post">
            @csrf
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label" style="color:hsl(0, 0%, 100%)">Email</label>
            <input type="email" class="form-control" placeholder="email"  id="email" name="email" >
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label" style="color:#FFF">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label" style="color:#FFF">No Telpon</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" placeholder="08000000000">
          </div>
          <div class="col-md-6">
            <label for="jk" class="form-label" style="color:#FFF">Jenis kelamin</label>
            <select id="jk" name="jk" class="form-select @error('jk') is-invalid @enderror" placeholder="pilih">
              <option>laki laki</option>
              <option>perempuan</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="jk" class="form-label" style="color:#FFF">Pilih Jenis Zakat</label>
          <select id="jenis_zakat" name="jenis_zakat"class="form-select" aria-label="Default select example">
            <option>Zakat Maal</option>
            <option>Zakat Profesi</option>
            <option>Zakat Tabungan</option>
            <option>Zakat Pertanian</option>
            <option>Zakat Perdagangan</option>
            <option>Zakat Emas & Perak</option>
          </select>
        </div>
          <div class="input-group mb-3">
            <span class="input-group-text">RP.</span>
              <input style="color:#000" id="nominal" name="nominal" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" style="color:#FFF" placeholder="nominal zakat yang dibayarkan">
          </div>
          <div class="col-md-12">
            <label for="haul" class="form-label" style="color:#FFF">Haul</label>
            <select id="haul" name="haul" class="form-select @error('jk') is-invalid @enderror" placeholder="pilih">
              <option>satu tahun</option>
              <option>satu tahun</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">konfirmasi</button>
          </div>
    </div>
  </body>
  </html>
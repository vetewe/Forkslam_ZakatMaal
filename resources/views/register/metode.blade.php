<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="gambar/logo.png" rel="shorcut icon">
    <title>FORKALAM | METODE</title>
  </head>
  <body>
    <header class="fixed-top">
        <div class="logo">
            <a href="#">
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
    <br><br>
    <br><br>
    <div class="container">
    <h1 style="color:#FFF">silakan isi field berikut:</h1><br><br>
    <form class="row g-3" action="/metode" method="post">
          @csrf
          <h4 style="color:#FFF">Masukkan nominal</h4>
      <div class="input-group mb-3">
        <span class="input-group-text">RP.</span>
          <input style="color:#000" id="nominal" name="nominal" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" style="color:#FFF">
      </div>
      <select id="metode_bayar" name="metode_bayar"class="form-select" aria-label="Default select example">
        <option selected>Pilih Metode Pembayaran</option>
        <option>Dana</option>
        <option>Gopay</option>
      </select>
      <div class="col-12">
        <button type="submit" class="btn btn-success">lanjut</button>
      </div>
    </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
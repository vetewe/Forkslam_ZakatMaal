<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="gambar/logo.png" rel="shorcut icon">
    <title>FORKALAM | KALKULATOR</title>
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
        <nav class="navbar navbar-expand-sm fixed-top">
            <a href="/registrasi" class="active">kembali</a>
        </nav>
    </header>


    <center>
        <h2 style="color:#FFF">KALKULATOR ZAKAT</h2>
    </center>
    <span class=""><br>
    <div class="container-sm border border-success">
    <form>
        <h3 style="color:#FFF">zakat maal</h3>
        <h6 style="color:#FFF">Nilai emas, perak, dan/atau permata</h6>
        <div class="input-group mb-3">
            <span class="input-group-text">RP.</span>
            <input type="number" id="Z1" name="Z1" class="form-control" aria-label="Amount (to the nearest dollar)">           
          </div><br>

        <h6 style="color:#FFF">Uang tunai, tabungan, deposito</h6>
        <div class="input-group mb-3">
            <span class="input-group-text">RP.</span>
            <input type="number" id="Z2" name="Z2" class="form-control" aria-label="Amount (to the nearest dollar)">            
        </div><br>

        <h6 style="color:#FFF">Kendaraan, rumah, aset lain</h6>
        <div class="input-group mb-3">
            <span class="input-group-text">RP.</span>
            <input type="number" id="Z3" name="Z3" class="form-control" aria-label="Amount (to the nearest dollar)">            
        </div><br>

        <h6 style="color:#FFF">Jumlah hutang/cicilan (optional)</h6>
        <div class="input-group mb-3">
            <span class="input-group-text">RP.</span>
            <input type="number" id="Z4" name="Z4" class="form-control" aria-label="Amount (to the nearest dollar)">            
        </div>

        <button type="submit" name="submit" class="btn btn-success">hitung</button>
        <div style="color:#FFF">
            <center><h4>Jumlah zakat maal Anda: </h4><br></center>
            <center><h2>Rp. {{ $total }},-</h2><br> </center>
            <center>{{ $teks }}<br></center>
            <center>{{ $teks2 }}<br></center>
            <center>emas,perak,permata: Rp. {{ $Z1 }} <br></center> 
            <center>Tabungan dan lainnya: Rp. {{ $Z2 }} <br></center>
            <center>Kendaraan dan aset lainnya: Rp. {{ $Z3 }} <br></center>
            <center>Hutang atau cicilan: Rp. {{ $Z4 }} </center>
            </div>

      </form>
    </div>
    </span>

    <span class=""><br>
        <div class="container-sm border border-success">
        <form>
            <h3 style="color:#FFF">zakat penghasilan</h3>
            <h6 style="color:#FFF">Jumlah pendapatan per bulan </h6>
            <div class="input-group mb-3">
                <span class="input-group-text">RP.</span>
                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">           
              </div><br>
    
            <h6 style="color:#FFF">Bonus, THR dan lainnya</h6>
            <div class="input-group mb-3">
                <span class="input-group-text">RP.</span>
                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">            
            </div><br>
        
            <button type="submit" class="btn btn-success">hitung</button>
            
          </form>
        </div>
        </span>
    </body>
    </html>
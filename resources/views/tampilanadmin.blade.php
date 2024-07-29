<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <link rel="shortcut icon" href="gambar/logo.png">
            <title>FORKALAM | ADMIN</title>
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
            </header>
            <br><br>
            <br><br>
            <center><h1 style="color:#FFF">DATA MUZAKKI</h1></center><br><br>
            <div class="container">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jenis Zakat</th>
                        <th>Nominal</th>
                        <th>Haul</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($request as $key => $ambil)
                            <tr>
                                <td style="color:#FFF">{{ $key+1 }}</td>
                                <td style="color:#FFF">{{ $ambil->nama }}</td>
                                <td style="color:#FFF">{{ $ambil->jk }}</td>
                                <td style="color:#FFF">{{ $ambil->no_hp }}</td>
                                <td style="color:#FFF">{{ $ambil->email }}</td>
                                <td style="color:#FFF">{{ $ambil->jenis_zakat }}</td>
                                <td style="color:#FFF">{{ $ambil->nominal }}</td>
                                <td style="color:#FFF">{{ $ambil->haul }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <footer>
                <section class="top">
                    <img src="gambar/logo.png" />
                    <ul>
                        <li>
                            <h3 style="color:#000;">Youtube</h3>
                            <div class="social">
                                <a href="https://www.youtube.com/@forkalamal-kahfi9402"><i class="bi bi-youtube"></i></a>
                            </div>
                        </li>
                        <li>
                            <h3 style="color:#000;">Instagram</h3>
                            <div class="social">
                                <a href="https://www.instagram.com/forkalamalkahfi?igsh=MXA3ZGtxN2loYTljMQ=="><i class="bi bi-instagram"></i></a>
                            </div>
                        </li>
                        <li>
                            <h3 style="color:#000;">Facebook</h3>
                            <div class="social">
                                <a href="https://www.facebook.com/www.stmiknh.ac.id?mibextid=9R9pXO"><i class="bi bi-facebook"></i></a>
                            </div>
                        </li>
                        <li>
                            <h3 style="color:#000;">Instagram lama</h3>
                            <div class="social">
                                <a href="https://www.instagram.com/forkalam_alkahfi?igsh=ZnhscnNjdG5kNWlx"><i class="bi bi-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="bottom">© 2023 Forkalam Al-Kahfi</section>
            </footer>
        </body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
        </style>
        <!--<style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap');
        </style> -->
    </html>

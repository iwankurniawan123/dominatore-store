
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dominator Store</title>
        <link rel="stylesheet" href="{{ asset('assets/css/adminjoki.css') }}" />
        <link 
          rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" referrerpolicy="no-referrer"/>
      </head>
  <body>
    <div class="nav-container">
        <div class="nav-logo">
          <img class="rounded-circle" src="{{ asset('assets/img/logo fix.jpeg') }}" alt="Logo Dominator Store" width="50" height="50">
          <div class="nav-title">Dominator Store</div>
        </div>    
        <div class="nav-link">
          <a href="{{ route('topUpReport') }}" class="link-list">Top Up</a>
          <a href="{{ route('jokiReport') }}" class="link-list">Joki</a>
        </div>
      </div>
    <main>
        <div class="col-md-8 pt-4">
          <h3 class="text-white">Orderan Joki</h3>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Customer</h5>
              <div class="row">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Login akun via</th>
                    <th>Email/No.Telp</th>
                    <th>Password</th>
                    <th>Nickname</th>
                    <th>Request Hero</th>
                    <th>Keterangan</th>
                    <th>Nomor WA</th>
                    <th>Jenis Layanan</th>
                    <th>Metode Pembayaran</th>
                    <th>Bukti Transaksi</th>
                    <th>Status</th>

                  </tr>

                  @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->akunVia }}</td>
                    <td>{{ $item->emailNoTlp }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->nickname }}</td>
                    <td>{{ $item->reqHero }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->whatsapp }}</td>
                    <td>{{ $item->namapacket }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                      <img
                      src="{{ $item->buktiPembayaran }}"
                      alt="picture Icon"
                      width="50"
                      height="50"
                    />
                    </td>
                    <td><button class="btn btn-success disabled ">Order</button></td>
                  </tr>
                  @endforeach
          
                </table>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-logo">
              <img class="rounded-circle" src="{{ asset('assets/img/logo fix.jpeg') }}" alt="Logo Dominator Store" width="50" height="50">
            </div>
          </div>
          <div class="col-md-6 text-md-right">
            <div class="footer-social">
              <h5 class="card-text">Contact Me</h5>
              <a href="http://https://www.facebook.com/Dominator Store" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="https://www.tiktok.com/@dominatorstore?_t=8h63l1Yv1V3&_r=1" class="social-icon"><i class="fab fa-tiktok"></i></a>
              <a href="https://instagram.com/dominatorstore_" class="social-icon"><i class="fab fa-instagram"></i></a>
              <a href="http://wa.me/6289512532617" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; Copyright 2023 | Dominatorstore.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
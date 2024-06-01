
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/AdminTopUp.css') }}" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dominator Store</title>
  </head>
  <body>
    @if(session('success'))
    <script>
        alert('{{ session('error') }}'); // Menampilkan pesan dalam bentuk pop-up
    </script>
    @endif
    <div class="nav-container">
      <div class="nav-logo">
        <img class="rounded-circle" src="{{ asset('assets/img/logo fix.jpeg') }}" alt="Logo Dominator Store" width="50" height="50">
        <span class="horizontal-text">Dominator Store</span>
      </div>
      <div class="nav-link">
        <a href="{{ route('topUpReport') }}" class="link-list">Top Up</a>
        <a href="{{ route('jokiReport') }}" class="link-list">Joki</a>
      </div>
      <div class="nav-logout">
        <a href="{{ route('login') }}" class="btn-logout">Logout</a>
      </div>
    </div>
    <main>
      <div class="col-md-8 pt-4">
        <h3>Orderan Top Up</h3>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Customer</h5>
            <div class="row">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Pemilihan Paket</th>
                  <th>User Id</th>
                  <th>Server Id</th>
                  <th>Nickname</th>
                  <th>Whatsapp</th>
                  <th>Metode Pembayaran</th>
                  <th>Bukti Transaksi</th>
                  <th>Status</th>
                </tr>
              @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->namapacket }}</td>
                    <td>{{ $item->akunUser }}</td>
                    <td>{{ $item->serverAkun }}</td>
                    <td>{{ $item->nickname }}</td>
                    <td>{{ $item->whatsapp }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                      <img
                        src="{{ $item->buktiPembayaran }}"
                        alt="picture Icon"
                        width="50"
                        height="50"
                      />
                    </td>
                    <td><button class="btn btn-success disabled">Konfirmasi</button></td>
                  </tr>
              @endforeach
            
  
              </table>
            </div>
          </div>
        </div>
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
              <a
                href="http://https://www.facebook.com/Dominator Store"
                class="social-icon"
                ><i class="fab fa-facebook"></i
              ></a>
              <a
                href="https://www.tiktok.com/@dominatorstore?_t=8h63l1Yv1V3&_r=1"
                class="social-icon"
                ><i class="fab fa-tiktok"></i
              ></a>
              <a
                href="https://instagram.com/dominatorstore_"
                class="social-icon"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="http://wa.me/6289512532617" class="social-icon"
                ><i class="fab fa-whatsapp"></i
              ></a>
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

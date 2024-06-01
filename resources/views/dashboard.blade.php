<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dominator Store</title>

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}" />
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" />
    <!-- Font Awesome 5.15.4 -->
    <link
      rel="stylesheet"
      href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    @if(session('success'))
    <script>
        alert('{{ session('success') }}'); // Menampilkan pesan dalam bentuk pop-up
    </script>
    @endif
    <div class="nav-container">
      <div class="nav-logo">
        <img src="assets/img/logods.png" alt="Logo Dominator Store">
        <div class="nav-title">Dominator Store</div>
      </div>    
      <div class="nav-link">
        <a href="#event" class="link-list">Event</a>
        <a href="#promo" class="link-list">Promo</a>
      </div>
    </div>

    <main>
      <div class="content pt-5">
        <div class="content-description">
          <h1 class="title">Top Up & Joki Game Mobile Legends</h1>
          <p>
            Digital Dominators adalah website yang ditujukan untuk membantu para gamer agar mendapatkan keunggulan dalam dunia game online dan pengalaman game yang lebih mengasyikkan, efisien dan kompetitif. Denagn menyediakan layanan utama website yaitu Top Up & Jasa Joki 
            .
          </p>
        </div>

        <div class="content-image">
          <div class="row">
              <div class="col-md-12 col-lg-6">
              <a href="{{ route('topup') }}">
                <img src="assets/img/ds1.png" alt="Top UP" />
              </a>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 col-lg-6">
                <a href="{{ route('joki') }}">
                  <img src="assets/img/ds2.png" alt="Joki Rank" />
                </a>
              </div>
          </div>
        </div>
      </div>
    </main>
  
    <footer class="footer mt-auto py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-logo">
              <img src="assets/img/logods.png" alt="Logo Toko" />
            </div>
          </div>
          <div class="col-md-6 text-md-right">
            <div class="footer-social">
              <h5 class="card-text">Contact Me</h5>
              <a href="https://www.facebook.com/profile.php?id=61552239549351&mibextid=LQQJ4d" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="https://www.tiktok.com/@dominatorstore?_t=8h63l1Yv1V3&_r=1" class="social-icon"><i class="fab fa-tiktok"></i></a>
              <a href="https://instagram.com/dominatorstore?igshid=MTl1ZnQ4Nnl3MmlvMA==" class="social-icon"><i class="fab fa-instagram"></i></a>
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
    <script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
  </body>
</html>

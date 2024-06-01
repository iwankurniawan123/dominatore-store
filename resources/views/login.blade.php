<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="assets/css/login.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   </head>
   <body>
      @if($errors->any())
      <script>
          var errorMessage = '';
          @foreach ($errors->all() as $error)
              errorMessage += "{{ $error }}\n";
          @endforeach
  
          alert(errorMessage);
      </script>
      @endif
      @if(session('error'))
      <script>
          alert('{{ session('error') }}'); // Menampilkan pesan dalam bentuk pop-up
      </script>
      @endif
      <div class="wrapper">
         <div class="title">
            Log In
         </div>
         <form action="{{ route('login-auth') }}" method="post">
            @csrf
            <div class="field">
               <input type="text" name="name" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="d-flex justify-content-center">
               <button type="submit" class="btn btn-lg btn-primary">Login</button>
            </div>
         </form>
      </div>
   </body>
</html>
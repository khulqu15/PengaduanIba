<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Complainly - Registrasi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .alert.alert-danger {
      background-color: rgb(223, 55, 55);
      border-radius: 16px;
      position: fixed;
      width: 80%;
      left: 10%;
      border: none;
      top: 10%;
      z-index: 100;
      padding: 1rem;
      color: white;
    }
    .alert.alert-success {
      background-color: rgb(29, 187, 113);
      border-radius: 16px;
      position: fixed;
      width: 80%;
      left: 10%;
      border: none;
      top: 10%;
      z-index: 100;
      padding: 1rem;
      color: white;
    }
  </style>
</head>

<body style="background-color: #ffffb3">

  @if(Session::has('error'))
    <div class="alert alert-danger">
      <span>{{ Session::get('error') }}</span>
    </div>
  @endif

  @if(Session::has('success'))
    <div class="alert alert-success">
      <span>{{ Session::get('success') }}</span>
    </div>
  @endif

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">DAFTAR AKUN</h1>
                  </div>
                  <form class="user" action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="form-group" method="post" action="{{ url('/simpan_masyarakat') }}">
                      <input type="text" name="nik" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <input type="number" name="phone" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan No Telepon">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-warning btn-user btn-block" value="DAFTAR">
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                      Sudah Punya Akun?<br>
                    <a class="small" style="font-weight: bold" href="{{ url('/login') }}">LOGIN</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

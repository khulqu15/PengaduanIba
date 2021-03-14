<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Complainly - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body id="page-top">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">
                <h3 class="m-0 font-weight-bold text-secondary" align="center">PEMERINTAH KABUPATEN PASURUAN</h3>
                <h4 class="m-0 font-weight-bold text-secondary" align="center">DESA KARANGREJO KEC. PURWOSARI</h4>
                <h6 class="m-0 font-weight-bold text-secondary" align="center">Jalan Kauman II Desa Karangrejo Kode Pos 67162</h6>
                <br><br><hr>
                <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Data Masyarakat</h4>
                <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Telepon</th>
                    </tr>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <br><br>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Karangrejo, day-m-y</h6>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Admin,</h6>
                <br><br><br><br>
                <h6 class="m-0 font-weight-bold text-primary" align="right">name()</h6>
            </div>
          </div>

</body>

</html>
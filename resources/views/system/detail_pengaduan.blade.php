@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div class="card shadow">
    <div class="card-header">
        Detail Pengaduan
    </div>
    
    <div class="card-body">
        <div class="form-group cols-sm-6">
            <a href="{{ url('system/verifikasi_pengaduan') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
            </a>
        </div>
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>Tanggal Pengaduan</label>
                <input type="text" name="" value="{{ \Carbon\Carbon::parse($complaint->created_at)->format('D, d M Y') }}" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>NIK</label>
                <input type="text" name="nik" value="{{ $complaint->nik }}" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
                
                <textarea name="report" cols="100%" rows="7" class="form-control" readonly >{{ $complaint->report }}</textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label>Bukti Foto</label>
                <div>
                    <img src="{{ url('/img/report/'.$complaint->picture) }}" width=400>
                </div>
            </div>

        </form>
    </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{url('jquery/jquery.min.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('js/sb-admin-2.min.js')}}"></script>

@endsection
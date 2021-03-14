@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div class="card shadow">
    <div class="card-header">
        Tanggapan
    </div>
    
    <div class="card-body">
        <div class="form-group cols-sm-6">
            <a href="{{ url('system/verifikasi_pengaduan') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
            </a>
        </div>
        <form action="{{ url('system/simpan_tanggapan') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                @csrf
                <input type="hidden" name="_method" value="PATCH" class="form-control" readonly>
                <input type="hidden" name="complaint_id" value="{{ $complaint->id }}" class="form-control" readonly>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Tanggal Tanggapan</label>
                <input type="text" name="" value="{{ \Carbon\Carbon::parse($complaint->created_at)->format('D, d M Y') }}" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Tulis Tanggapan</label>
                <textarea name="response" cols="100%" rows="7" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary btn-user" value="Tanggapi !">
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
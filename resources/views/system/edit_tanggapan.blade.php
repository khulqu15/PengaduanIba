@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div class="card shadow">
    <div class="card-header">
        Edit Tanggapan
    </div>
    <div class="card-body">
        <!--  -->
        <form action="{{ route('update.response', $respond->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group cols-sm-6">
                <label>Tanggal</label>
                <input type="text" name="tgl" readonly value="{{ \Carbon\Carbon::parse($respond->created_at)->format('D, d M Y') }}" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Isi Tanggapan</label>
                <input type="text" name="response" value="{{ $respond->response }}" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                <input type="submit" value="Update Tanggapan" class="btn btn-primary">
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
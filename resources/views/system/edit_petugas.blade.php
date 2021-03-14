@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div class="card shadow">
    <div class="card-header">
        Edit Data Petugas
    </div>
    <div class="card-body">
        <!--  -->
        <form action="{{ route('update.petugas', $user->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group cols-sm-6">
                <label>Nama Petugas</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Email</label>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Telpon</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Level</label>
                <select class="form-control" name="level">
                    <option value="">//Pilih Level</option>
                    <option {{ $user->level == 'user' ? 'selected' : '' }} value="user">User</option>
                    <option {{ $user->level == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                    <option {{ $user->level == 'petugas' ? 'selected' : '' }} value="petugas">Petugas</option>
                </select>
            </div>

            <div class="form-group col-sm-6">
                <input type="submit" value="Edit Data" class="btn btn-primary">
                <input type="reset" value="Kosongkan" class="btn btn-warning">
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
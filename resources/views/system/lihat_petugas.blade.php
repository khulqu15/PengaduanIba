@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content')   
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
                <a href="{{url('system/tambah_petugas')}}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a><br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Petugas</th>
                      <th>Email</th>
                      <th>Telpon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                      <td>
                        <a href="{{route('edit.petugas', $item->id)}}" class="btn btn-primary btn-circle">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('delete.petugas', $item->id)}}" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
                            <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>                        
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection
@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Tanggapan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($respond as $item)
                    <tr>
                      <td>{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</td>
                      <td>{{ substr($item->response, 0, 30) }}</td>
                      <td>
                        <a href="{{route('edit.response', $item->id)}}" class="btn btn-primary btn-circle">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('delete.response', $item->id)}}" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
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
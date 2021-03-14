@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($complaint as $item)
                    <tr>
                      <td>{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</td>
                      <td>{{ $item->nik }}</td>
                      <td>{{ substr($item->report, 0, 27) }}</td>
                      <td><img src="{{ asset('img/report/'.$item->picture) }}" width="50px" alt="{{ $item->picture }}"></td>
                      <td>{{ $item->status }}</td>
                      <td>
                      <a href="{{route('show.complaint.admin', $item->id)}}" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-info"></i>
                        </span>
                        <span class="text">Detail</span>
                      </a>
                      <a href="{{route('create.response.complaint', $item->id)}}" class="btn btn-danger  btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Tanggapi</span>
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
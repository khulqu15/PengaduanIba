@extends('layout/navbar')

@section('title', 'Complainly')

@section('container-fuild')
    <div class="jumbotron" style="padding-top:60; padding-bottom:10; background-color: #ffffff;">
        <div class="row mt-4 pl-4">
            <div>
                <h5 style="color: #f0ad4e">Histori Pengaduan</h5>
            </div>
            <br>
            <br>
        </div>
        <div class="row">
            <div class="col-12">
                    <div class="card shadow mb-4">
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
                               @foreach ($complaints as $item)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ substr($item->report, 0, 25) }}</td>
                                    <td><img src="{{ $item->picture != null ? asset('img/report/'.$item->picture) : asset('img/report/noimg.png') }}" width="50px" alt="{{ $item->name }}"></td>
                                    <td>Open</td>
                                    <td>
                                    <a href="{{ route('show.complaint', $item->id) }}" class="btn btn-info  btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a>
                                    <a href="{{ route('show.complaint.respond', $item->id) }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                        </span>
                                        <span class="text">Lihat Tanggapan</span>
                                    </a>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
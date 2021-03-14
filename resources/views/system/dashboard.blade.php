@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content')   
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Laporan Pengaduan :</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ada ({{ count($complaint) }} Penggaduan) Laporan dari Masyarakat yang Harus Ditanggapi</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-4x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter">
                        ()
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

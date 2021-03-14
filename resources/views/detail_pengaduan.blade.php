@extends('layout/navbar')

@section('title', 'Complainly')

@section('container-fuild')
<div class="jumbotron" style="padding-top:60; padding-bottom:10; background-color: #ffffff;">
        <div class="row mt-4 pl-4">
            <div>
                <h5 style="color: #f0ad4e">Detail Pengaduan</h5>
            </div>
            <br>
            <br>
        </div>
        <div class="row">
            <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="form-group cols-sm-6">
                                <a href="{{ url('/history') }}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                </a>
                            </div>
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group cols-sm-6">
                                    <label>NIK</label>
                                    <input type="text" value="{{ $complaint->nik }}" name="nik" class="form-control" readonly>
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
                </div>
        </div>
    </div>


@endsection
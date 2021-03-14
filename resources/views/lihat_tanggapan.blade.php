@extends('layout/navbar')

@section('title', 'Complainly')

@section('container-fuild')
<div class="jumbotron" style="padding-top:60; padding-bottom:10; background-color: #ffffff;">
        <div class="row mt-4 pl-4">
            <div>
                <h5 style="color: #f0ad4e">Tanggapan Pengaduan Anda</h5>
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
                            <div>
                                @foreach ($complaint->response as $item)
                                    <div class="w-100 p-3 my-2 border rad rounded">
                                        <h3 class="mb-0">{{ $item->user->name }}</h3>
                                        <p>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                                        {{ $item->response }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection


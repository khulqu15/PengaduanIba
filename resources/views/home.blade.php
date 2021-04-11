@extends('layout/navbar')

@section('title', 'Complainly')

@section('container-fuild')
    <div class="jumbotron" style="padding-top:60; padding-bottom:10; background-color: #ffffff;">
        <div class="row">
            <div class="col-6">
                <div class="row mt-4 pl-5">
                    <div>
                        <h5 style="color: #f0ad4e">Tulis Pengaduan Anda Disini !</h5>
                    </div>
                    <br>
                    <br>
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('store.complaint') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group cols-sm-6">
                                    <label>NIK</label>
                                    <input readonly disabled value="{{ Auth::user()->nik }}" type="text" name="nik" value="" class="form-control">
                                </div>
                                <div class="form-group cols-sm-6">
                                    <label>Tulis Laporan</label>
                                    <textarea name="report" cols="100%" rows="7" class="form-control" ></textarea>
                                </div>
                                <div class="form-group cols-sm-6">
                                    <label>Unggah Foto</label>
                                    <input type="file" name="picture" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red">
                                    * type yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                    <input type="submit" value="Kosongkan" class="btn btn-warning">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img src="{{ asset('img/131.png') }}" style="width: 80vh; margin-top: 50px" >
            </div>
        </div>
    </div>
@endsection
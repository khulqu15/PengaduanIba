@extends('layout/main')

@section('title', 'Complainly')

@section('container-fuild')
    <div class="jumbotron" style="padding-top:40; padding-bottom:10; background-color: #ffff99;">
        <div class="row">
            <div class="col-6">
                <div class="row mt-4">
                    <div class="title">
                        Cara mudah dan instan untuk menyelesaikan keluhan Anda
                    </div>
                    <div class="subtitle">
                        Satu ruang solusi intuk semua keluhan Anda. Demi kenyamanan Anda. Demi waktu Anda.
                    </div>
                    <div class="mulai">
                        <button type="button" class="btn btn-warning btnmulai" >
                            MULAI
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ asset('img/056.png') }}" style="width: 100vh;" >
            </div>
        </div>
    </div>
    <div class="container" style="background: #ffffff">
    <center>
    <div class="row" style="padding-top: 40px;">
        <div class="col-12 judul">
            Dapatkan solusi tenteng keluhan Anda
        </div>
    </div>
    <div class="row" style=" padding-bottom: 40px;">
        <div class="col-6 judul2">
            dengan
        </div>
        <div class="col-6 judul3" style="font-weight: bold;">
            Complainly
        </div>
    </div>
    </center>
    </div>
    <div class="container-fluid" style="background: #ffffff; padding-top: 40px">
        <div class="row">
            <div class="col-6">
                <div class="row decoration">
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-6">
                                <div class="card" style="width: 16rem; height: 300px; box-shadow: 3px 3px 3px rgba(5, 5, 5, 0.2); border: none; border-radius: 10px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #ffde28">Kekuatan Keluhan Anda</h4>
                                        <p class="card-text" style="margin-top: 20px; font-size: 18">Untuk setiap keluhan, ketahui seberapa kuat keluhan Anda dari laporan yang Kami buat untuk Anda.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 16rem; height: 300px; margin-top: 40px; box-shadow: 3px 3px 3px rgba(5, 5, 5, 0.2); border: none; border-radius: 10px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #ffde28">Menghemat Waktu Penyampaian Keluhan</h4>
                                        <p class="card-text" style="margin-top: 20px; font-size: 18">Dengan adanya aplikasi ini, Anda dapat menyampaikan / melaporkan keluhan Anda dengan praktis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card custom" style="width: 16rem; height: 400px; margin-top: 140px; margin-left: 50px; box-shadow: 3px 3px 3px rgba(5, 5, 5, 0.2); border: none; border-radius: 10px">
                            <div class="card-body">
                                <h4 class="card-title" style="color: #ffde28">Meningkatkan Partisipasi Masyarakat</h4>
                                <p class="card-text" style="margin-top: 20px; font-size: 18">Aplikasi Complainly bertujuan untuk meningkatkan partisipasi masyarakat agar penyelenggaraan pembangunan dan pelayanan publik berjalan dengan baik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row" style="margin-top: 180px">
                    <div class="col-4" style="text-align: right; margin-top: 15px">
                        <h1 style="font-weight: bold">Maksud</h1>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/logo2.png') }}" style="height: 70px;">
                    </div>
                </div>
                <div class="row" style="margin-top: 20px; margin-left: 60px;">
                    <div class="col-10">
                        <p>Aplikasi Complainly ini dapat digunakan diantaranya untuk pelayanan publik dan manajemen informasi provinsi.
                            Masyarakat dapat dengan mudah melaporkan keluhan kepada pemerintah, karena pelayanan publik adalah tanggung jawab pemerintah, baik pusat maupun daerah.
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px; margin-left: 70px;">
                    <div class="line"></div>
                </div>
                <div class="row" style="margin-top: 5px; margin-left: 70px;">
                    <div class="line1"></div>
                </div>
                <div class="row" style="margin-top: 5px; margin-left: 70px;">
                    <div class="line2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff; padding-top: 80px; padding-bottom: 80px">
        <div class="row decoration2">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('img/071.svg') }}" class="bounce" style="height: 30rem; width: 35rem">
                    </div>
                    <div class="col-6" style="padding: 80px;">
                        <div class="row">
                            <div class="line" style="margin-left: 70px"></div>
                        </div>
                        <div class="row" style="margin-top: 60px">
                            <p style="font-size: 20">Complainly, menyelesaikan penanganan pengaduan sesuai dengan mekanisme yang berlaku. Membuktikan benar atau tidaknya hal yang diadukan. 
                                Memberikan jaminan bagi masyarakat bahwa laporan pengaduan yang diajukan ditangani secara efektif, efisien, cepat dan dapat
                                dipertanggung-jawabkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ftr">
        <footer>
            <p>Copyright 2021. ToyibatulIR</p>
        </footer>
    </div>

@endsection
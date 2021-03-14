<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function registrasi()
    {
        return view('registrasi');
    }

    public function home_masyarakat()
    {
        $user = User::find(Auth::id());
        return view('home', compact('user'));
    }
    public function history()
    {
        $complaints = Complaint::orderBy('id', 'DESC')->get();
        return view('history', compact('complaints'));
    }

    public function detail_pengaduan($id)
    {
        $complaint = Complaint::find($id);
        return view('detail_pengaduan', compact('complaint'));
    }
    public function lihat_tanggapan($id)
    {
        $complaint = Complaint::with('Response', 'Response.User')->find($id);
        return view('lihat_tanggapan', compact('complaint'));
    }
    
    // system
    
    public function index()
    {
        return view('system/index');
    }

    // system admin

    public function dashboard_admin()
    {
        $complaint = Complaint::where('status', 'open')->get();
        return view('system/dashboard', compact('complaint'));
    }
    
    public function verifikasi_pengaduan_admin()
    {
        $complaint = Complaint::where('status', 'open')->get();
        return view('system/verifikasi_pengaduan', compact('complaint'));
    }

    public function detail_pengaduan_admin($id)
    {
        $complaint = Complaint::find($id);
        return view('system/detail_pengaduan', compact('complaint'));
    }

    public function tanggapan_admin($id)
    {
        $complaint = Complaint::find($id);
        return view('system/tanggapan', compact('complaint'));
    }

    public function lihat_petugas()
    {
        $user = User::where('level', 'petugas')->get();
        return view('system/lihat_petugas', compact('user'));
    }
    public function tambah_petugas()
    {
        return view('system/tambah_petugas');
    }
    public function edit_petugas($id)
    {
        $user = User::find($id);
        return view('system/edit_petugas', compact('user'));
    }
    public function preview_petugas()
    {
        $data = User::where('level', 'petugas')->get();
        return view('system/preview_petugas', compact('data'));
    }
    public function cetak_petugas()
    {
        $data = User::where('level', 'petugas')->get();
        return view('system/cetak_petugas', compact('data'));
    }

    public function lihat_masyarakat()
    {
        $user = User::where('level', 'user')->get();
        return view('system/lihat_masyarakat', compact('user'));
    }
    public function preview_masyarakat()
    {
        $data = User::where('level', 'user')->get();
        return view('system/preview_masyarakat', compact('data'));
    }
    public function cetak_masyarakat()
    {
        $data = User::where('level', 'user')->get();
        return view('system/cetak_masyarakat', compact('data'));
    }


    public function lihat_laporan()
    {
        $complaint = Complaint::all();
        return view('system/lihat_laporan', compact('complaint'));
    }
    public function preview_pengaduan()
    {
        $data = Complaint::orderBy('id', 'DESC')->get();
        return view('system/preview_pengaduan', compact('data'));
    }
    public function cetak_pengaduan()
    {
        $data = Complaint::orderBy('id', 'DESC')->get();
        return view('system/cetak_pengaduan', compact('data'));
    }

    public function lihat_tanggapan_admin()
    {
        $respond = Response::with('Complaint', 'User', 'Complaint.User')->get();
        return view('system/lihat_tanggapan', compact('respond'));
    }
    public function edit_tanggapan($id)
    {
        $respond = Response::find($id);
        return view('system/edit_tanggapan', compact('respond'));
    }
    public function delete_tanggapan()
    {
        return view('system/delete_tanggapan');
    }
    public function preview_tanggapan()
    {
        $data = Response::orderBy('id', 'DESC')->get();
        return view('system/preview_tanggapan', compact('data'));
    }
    public function cetak_tanggapan()
    {
        $data = Response::orderBy('id', 'DESC')->get();
        return view('system/cetak_tanggapan', compact('data'));
    }


    // system petugas

    // public function dashboard_petugas()
    // {
    //     return view('system/petugas/dashboard');
    // }

    // public function halaman_petugas()
    // {
    //     return view('system/petugas/halaman_petugas');
    // }

    // public function verifikasi_pengaduan_petugas()
    // {
    //     return view('system/petugas/verifikasi_pengaduan');
    // }

    // public function detail_pengaduan_petugas()
    // {
    //     return view('system/petugas/detail_pengaduan');
    // }

    // public function proses()
    // {
    //     return view('system/petugas/proses');
    // }
}

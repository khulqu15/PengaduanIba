@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div>
    <button type="button" class="btn btn-warning" onclick="frames['frame'].print();">
        <i class="fa fa-print"></i>
        Cetak Data
    </button>
    <iframe src="{{url('system/cetak_masyarakat')}}" name="frame" width="100%" height="600" frameborder="0"></iframe>
</div>
@endsection

@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Tambah pertanyaan' : 'Create Pertanyaan' )

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">@yield('title')</h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-laporan.dataisikuisoner.update', $data->id) : route('admin.data-laporan.dataisikuisoner.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif

    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Form @yield('title')</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('nama') ?? $data->nama ?? null }}}">
                <label for="name">No KK</label>
                <input type="text" name="no_kk" class="form-control" autofocus data-parsley-required="true" value="{{{ old('no_kk') ?? $data->no_kk ?? null }}}">
                <label for="name">Bulan</label>
                <input type="text" name="bulan" class="form-control" autofocus data-parsley-required="true" value="{{{ old('bulan') ?? $data->bulan ?? null }}}">
                <label for="name">Skor</label>
                <input type="text" name="skor" class="form-control" autofocus data-parsley-required="true" value="{{{ old('skor') ?? $data->skor ?? null }}}">
                <label for="name">Hasil</label>
                <input type="text" name="hasil" class="form-control" autofocus data-parsley-required="true" value="{{{ old('hasil') ?? $data->hasil ?? null }}}">
            </div>
        </div>
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
        <!-- end panel-footer -->
    </div>
    <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
    <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
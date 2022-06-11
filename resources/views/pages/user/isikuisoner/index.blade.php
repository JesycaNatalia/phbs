@extends('layouts.user')

@section('title', 'Silahkan Isi Form Kuisoner')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header"><small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="card text-center">
        <div class="card-header">
            <STRong>FORM KUISONER</STRong>
        </div>
        <div class="card-body">
            <h5 class="card-text">1. Apakah Anda memiliki anggota keluarga yang sedang hamil?</h5>
            <p class="card-text"> </p>

        </div>
        <div class="card-footer text-muted">
            <a href="/user/isikuisoner" class="btn btn-primary">Ya</a>
            <a href="#" class="btn btn-primary">Tidak</a>
        </div>
    </div>

    <!-- end panel-body -->
</div>
<!-- end panel -->
@endsection

@push('scripts')
<!-- datatables -->
<script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>

<!-- end datatables -->

<script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
<script>
    $(document).on('delete-with-confirmation.success', function() {
        $('.buttons-reload').trigger('click')
    })
</script>
@endpush
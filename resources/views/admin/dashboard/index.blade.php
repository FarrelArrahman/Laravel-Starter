@extends('layouts.template')
@php $dashboard = true @endphp
@section('header')
<div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
            <h5 class="text-white op-7 mb-2">Selamat datang, <strong>{{ Auth::user()->nama ?? 'Guest' }}</strong></h5>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row mt--2">
    <!-- Statistic -->
    <div class="col-md-12">
        <div class="card full-height">
            <div class="card-body">
                <div class="card-title">Dashboard</div>
                <div class="card-category">Keterangan</div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('bottom')
<script>
    $('#basic-datatables').DataTable();
</script>
@endpush

@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Ödeme Tipleri</h1>
@stop

@section('content')
<div id="app">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Ödeme Tipi Ekle</h3>

        </div>
        <create-payment-types></create-payment-types>
    </div><!-- /.box -->
</div>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
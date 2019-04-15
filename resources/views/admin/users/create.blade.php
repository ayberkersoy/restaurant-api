@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Kullanıcılar</h1>
@stop

@section('content')
<div id="app">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Kullanıcı Ekle</h3>

        </div>
        <create-users></create-users>
    </div><!-- /.box -->
</div>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
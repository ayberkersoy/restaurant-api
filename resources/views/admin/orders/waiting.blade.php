@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Bekleyen Siparişler</h1>
@stop

@section('content')
    <div id="app">
        <!-- Default box -->
        <div class="box">
            <waiting-orders></waiting-orders>
        </div><!-- /.box -->
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
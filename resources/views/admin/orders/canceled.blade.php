@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>İptan Edilen Siparişler</h1>
@stop

@section('content')
    <div id="app">
        <!-- Default box -->
        <div class="box">
            <canceled-orders></canceled-orders>
        </div><!-- /.box -->
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
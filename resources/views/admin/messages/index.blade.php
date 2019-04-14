@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Mesajlar</h1>
@stop

@section('content')
<div id="app">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Mesajlar</h3>

        </div>
        <index-messages></index-messages>
    </div><!-- /.box -->
</div>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
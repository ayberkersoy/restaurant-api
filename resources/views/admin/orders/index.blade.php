@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Siparişler</h1>
@stop

@section('content')
<div id="app">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Siparişler</h3>
            <div class="box-tools pull-right">
                <a class="btn btn-success" title="Yeni" href="/campaigns/create"><i class="fa fa-plus"></i> Yeni Ekle</a>
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <index-orders></index-orders>
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
@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content_header')
    <h1>Çalışanlar</h1>
@stop

@section('content')
    <div id="app">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Çalışan Düzenle</h3>

            </div>
            <edit-employees v-bind:id={{ $id }}></edit-employees>
        </div><!-- /.box -->
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
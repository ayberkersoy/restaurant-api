@extends('adminlte::page')

@section('title', 'MAY Creator')

@section('content_header')
    <h1>Kategoriler</h1>
@stop

@section('content')
<div id="app">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Kategoriler</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="campaigns_table" class="table table-bordered table-striped table-hover data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori Adı</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="category in categories">
                        <td>@{{ category['id'] }}</td>
                        <td>@{{ category['name'] }}</td>
                        <td>
                            <form action="/admin/category/@{{ category['id'] }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="/admin/category/@{{ category['id'] }}/edit" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{ asset('js/categories/categories.js') }}"></script>
@stop
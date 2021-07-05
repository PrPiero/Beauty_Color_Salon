@extends('admin.layout')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bienvenido {{ auth('workers')->user()->name }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    @include('admin.partials.modal_auth', ['sessionLINK' => session()->has('authenticated1'), 'sessionTEXT' => session('authenticated1')])
@endsection

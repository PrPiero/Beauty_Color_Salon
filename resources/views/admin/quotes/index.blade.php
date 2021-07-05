@extends('admin.layout')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark" style="font-weight: bold;">CITAS</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    @include('admin.partials.modal_date')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Citas de los Clientes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Date -->
            @include('admin.partials.daterange')
            <!-- Table -->
            <table id="quotes_table" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>N°</th>
                        <th>Cliente</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Ver Detalles</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @include('admin.quotes.modal_quote')
@endsection

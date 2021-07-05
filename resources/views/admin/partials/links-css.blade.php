<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- SELECT2 -->
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <!-- DATEPICKER / JQUERY UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery.ui.datepicker.min.css">
    <!-- TOASTR -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<style>
    .dataTables_filter input {
        background-image: url("/assets/fonts/vectorpaint.svg");
        background-repeat: no-repeat;
        background-position: 100% 50% !important;
        background-size: 16%;
        padding-right: 6%;
        position: absolute;
        right: 3%;
        bottom: 30%;
    }

    .select2-container .select2-selection--single {
        height: calc(1.5em + .75rem + 2px);
        border: 1px solid #ced4da;
        margin-bottom: .5rem !important;
        margin-top: .5rem !important;
        vertical-align: middle;
    }

    .select2-container .select2-selection--single:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }

    .select2-container--default .select2-selection--single {
        padding: .46875rem .3rem;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 55px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 30px;
    }
</style>

<body class="hold-transition sidebar-mini">

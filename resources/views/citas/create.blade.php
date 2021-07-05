@extends('layouts-citas.principal')
@section('titulo','Reservar Cita')
@section('contenido')
    <!--<link rel="stylesheet" href="../css/app.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <form action="{{route('citas.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="pt-5">
                    <div class="col-sm p-4">
                        <img src="../img/horarios.JPG" width="360">
                    </div>
                </div>
                <div style="max-width: 48%;"class="col-sm pt-5 p-4 mt-4">
                        <label class="pt-2">Para hacer una cita o reservación debes llenar todos los campos indicados a continuación para poder atenderte mejor.
                         Una vez realizada tu reserva nos estaremos comunicando contigo para confirmar la misma.</label>
                        <div class="row p-2">

                            <div class="d-flex flex-column flex-nowrap">
                                <div class="order-1 p-2">Nombres y Apellidos*</div>
                                <input class="order-2 p-2" name="cliente" type="text" required>
                            </div>
                            <div class="d-flex flex-column flex-nowrap">
                                <div class="order-1 p-2">Telefono Contacto*</div>
                                <input class="order-2 p-2" name="telefono" type="number" maxlength="9" minlength="7" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required/>
                                <i class="order-3 p-2">(Máximo 9 dígitos)</i>
                            </div>
                            <div class="d-flex flex-column flex-nowrap">
                                <div class="order-1 p-2">Correo Electronico*</div>
                                <input class="order-2 p-2" name="email" type="email" required>
                            </div>
                        </div>
                        <div style="padding-bottom: .7rem;"class="row p-2">
                            <div class="order-1 p-2">
                                Fecha* <input style="border-radius: .2rem;margin-left: 1vh;padding-left: .3rem;"name="fecha" type="date" required>
                            </div>
                        </div>
                            <div>
                            <div class="d-flex flex-column flex-nowrap">
                                <div class="order-1 p-2">Escribe aquí tus requerimientos y/o el motivo de tu reserva*</div>
                            </div>
                            <div style="padding: .2rem;"class="m-2">
                                <textarea style="height: 60px;    margin-left: -.5rem;" class="order-2 p-2" name="descripcion" id="" cols="30" rows="10" required></textarea>
                            </div>
                            <div>
                              <button type="submit" class="btn btn-secondary">ENVIAR</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </form>
    @if(session()->has('MENSAJE'))
        <div class="msjenv">{{ session('MENSAJE')}}</div>
    @endif
@endsection

<div class="row input-daterange">
    <div class="col-md-3 input-group date">
        <input type="text" name="from_date" id="from_date" class="form control datetimepicker-input" placeholder="Desde" readonly>
        <div class="input-group-append">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
    </div>
    <div class="col-md-3 input-group date">
        <input type="text" name="to_date" id="to_date" class="form control datetimepicker-input" placeholder="Hasta" readonly>
        <div class="input-group-append">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
    </div>
    <div class="col-md-3">
        <button type="button" name="filter" id="filter" class="btn btn-primary">Buscar</button>
        <button type="button" name="refresh" id="refresh" class="btn btn-secondary">Recargar</button>
    </div>
    @if (request()->is('admin/usuarios'))
        <div class="col-md-3 text-right">
            <a class="btn btn-success col-9" style="width: 73%;" data-toggle="modal" data-target="#UserRegisterModal" href="#"><i class="fa fa-plus"></i> Registrar Usuario</a>
        </div>
    @endif
</div>
<br>

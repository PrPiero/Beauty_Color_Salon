<!-- MODAL REGISTRAR USUARIO -->
<div class="modal fade" id="UserRegisterModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">REGISTRAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid print-error-msg2 alert alert-danger alert-dismissible fade show" style="display:none" role="alert">
                <ul></ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="user-register-form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="User_id2" name="User_id2">
                    <div class="form-inline">
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>NOMBRES:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="name2" name="name2">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>APELLIDOS:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="surname2" name="surname2">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>DNI:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="dni2" name="dni2">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>ESTADO:</b></label>
                            <select class="selState2 form-control my-2 col-lg-8" name="state2" id="state2">
                                <option></option>
                                <option value="Activo">Activo</option>
                                <option value="Deshabilitado">Deshabilitado</option>
                            </select>
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>ROL:</b></label>
                            <select class="selRol form-control my-2 col-lg-8" name="rol2" id="rol2">
                                <option></option>
                                <option value="Administrador">Administrador</option>
                                <option value="Vendedor">Vendedor</option>
                            </select>
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>EMAIL:</b></label>
                            <input type="email" class="form-control my-2 col-lg-8" id="email2" name="email2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL VER USUARIO -->
<div class="modal fade" id="UserModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">DETALLES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid print-error-msg alert alert-danger alert-dismissible fade show" style="display:none" role="alert">
                <ul></ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="user-form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="User_id" name="User_id">
                    <div class="form-inline">
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>NOMBRES:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>APELLIDOS:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="surname" name="surname" value="{{ old('surname') }}">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>DNI:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="dni" name="dni" value="{{ old('dni') }}">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>ESTADO:</b></label>
                            <select class="selState form-control my-2 col-lg-8" name="state" id="state">
                                <option></option>
                                <option id="option1" value="Activo">Activo</option>
                                <option id="option2" value="Deshabilitado">Deshabilitado</option>
                            </select>
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>ROL:</b></label>
                            <select class="selRol form-control my-2 col-lg-8" name="rol" id="rol">
                                <option></option>
                                <option value="Administrador">Administrador</option>
                                <option value="Vendedor">Vendedor</option>
                            </select>
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>EMAIL:</b></label>
                            <input type="email" class="form-control my-2 col-lg-8" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>CONTRASEÑA:</b></label>
                            <input type="password" class="form-control my-2 col-lg-8" id="password" name="password" autocomplete placeholder="Deje en blanco si no desea cambiarla">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>CONFIRMAR CONTRASEÑA:</b></label>
                            <input type="password" class="form-control my-2 col-lg-8" id="password_confirmation" name="password_confirmation" autocomplete>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnActualizar" class="btn btn-primary">Actualizar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL ELIMINAR USUARIO -->
<div class="modal fade" id="ConfirmModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">CONFIRMACIÓN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el usuario?
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

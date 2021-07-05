<!-- MODAL VER CITA -->
<div class="modal fade" id="QuoteModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">DETALLES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="quote-form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="Quote_id" name="Quote_id">
                    <div class="form-inline">
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>CLIENTE:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="txtClient" name="txtClient" onmousedown="return false" readonly="readonly" value="{{ old('txtClient') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>TELÉFONO:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="txtPhone" name="txtPhone" onmousedown="return false" readonly="readonly" value="{{ old('txtPhone') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>EMAIL:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="txtEmail" name="txtEmail" onmousedown="return false" readonly="readonly" value="{{ old('txtEmail') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>FECHA DE CITA:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="txtDate" name="txtDate" onmousedown="return false" readonly="readonly" value="{{ old('txtDate') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <!--<div class="form-group">
                            <label style="cursor: text;"><b>SERVICIO:</b></label>
                            <input type="text" class="form-control my-2" id="txtService" name="txtService" onmousedown="return false" readonly="readonly" value="{{-- old('txtService') --}}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>-->
                        <div class="container-fluid row">
                            <label class="my-1" style="cursor: text; display: inline-block; width: 130px;"><b>DESCRIPCIÓN:</b></label>
                            <textarea class="form-control shadow-none align-top col-lg-8" id="txtDescription" name="txtDescription" rows="1" cols="36" onfocus="window.activeobj=this;this.clock=setInterval(function(){activeobj.style.height=activeobj.scrollHeight+'px';},0);" onblur="clearInterval(this.clock);" onmousedown="return false" readonly value="{{ old('txtDescription') }}" style="border: 0; outline:none; background-color: white; cursor: text; overflow: hidden; display: block; resize: none;"></textarea>
                        </div>
                        <div class="container-fluid form-inline row">
                            <label style="cursor: text; display: inline-block; width: 130px;"><b>ESTADO:</b></label>
                            <input type="text" class="form-control my-2 col-lg-8" id="txtState" name="txtState" onmousedown="return false" readonly="readonly" value="{{ old('txtState') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" onclick="EnviarCorreo()" class="btn btn-success">Enviar Correo</button>
                    <button type="submit" onclick="CambiarEstado()" class="btn btn-primary">Cambiar Estado</button>
                </div>
            </form>
        </div>
    </div>
</div>

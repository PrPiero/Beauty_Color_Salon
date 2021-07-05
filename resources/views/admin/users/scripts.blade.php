<!-- LISTAR USUARIOS CON DATATABLE Y DATEPICKER -->
<script>
    $(document).ready(function() {
        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: 'yyyy/mm/dd',
            autoclose: true,
            language: 'es'
        });

        load_data();

        function load_data (from_date = '', to_date = '')
        {
            $('#users_table').DataTable({
                processing: false,
                serverSide: true,
                "paging": true,
                "lengthChange": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language": {
                    "url": "/assets/js/datatable.es.json"
                },
                ajax: {
                    url: "{{ route('admin.users.index') }}",
                    data: {from_date: from_date, to_date: to_date}
                },
                rowReorder: {
                    dataSrc: "id"
                },
                columns:[
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    //{data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'surname', name: 'surname'},
                    {data: 'email', name: 'email'},
                    {data: 'state', name: 'state'},
                    {data: 'roles[].name', name: 'roles[].name'},
                    {data: 'action', name: 'action', orderable: false}
                ],
            });
        }

        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();

            if (from_date != '' && to_date != '')
            {
                $('#users_table').DataTable().destroy();
                load_data(from_date, to_date);
            }

            else
            {
                $('#DateModal').modal('show');
            }
        });

        $('#refresh').click(function(){
            $('#from_date').val('');
            $('#to_date').val('');
            $('#users_table').DataTable().destroy();
            load_data();
        });
    });
</script>

<!-- REGISTRAR USUARIO -->
<script>
    $(document).ready(function() {
        $('#user-register-form').submit(function(e){
            e.preventDefault();

            var id = $('#User_id2').val();
            var name = $('#name2').val();
            var surname = $('#surname2').val();
            var dni = $('#dni2').val();
            var state = $('#state2').val();
            var rol = $('#rol2').val();
            var email = $('#email2').val();
            //var password = $('#password').val();
            //var password_confirmation = $('#password_confirmation').val();
            var _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('admin.users.store') }}",
                type: "POST",
                data:{
                    id: id,
                    name: name,
                    surname: surname,
                    dni: dni,
                    state: state,
                    roles: rol,
                    email: email,
                    //password: password,
                    //password_confirmation: password_confirmation,
                    _token: _token
                },
                success:function(response){
                    if(response.errors){
                        $(".print-error-msg2").find("ul").html('');
                        $(".print-error-msg2").css('display','block');
                        $.each(response.errors, function( key, value ) {
                            $(".print-error-msg2").find("ul").append('<li>'+value+'</li>');
                        });
                    }
                    else{
                        $('.print-error-msg2').hide();
                        $('#UserRegisterModal').modal('hide');
                        toastr.success('El usuario fue registrado con éxito', 'USUARIO REGISTRADO', {timeOut:3000});
                        $('#users_table').DataTable().ajax.reload();
                    }
                }
            });
        });
    });
</script>

<!-- ELIMINAR USUARIO -->
<script>
    var ani_id;

    $(document).on('click', '.delete', function(){
        ani_id = $(this).attr('id');
        $('#ConfirmModal').modal('show');
    });

    $('#btnEliminar').click(function(){
        $.ajax({
            url:"usuarios/eliminar/" + ani_id,
            success:function(data){
                setTimeout(function(){
                    $('#ConfirmModal').modal('hide');
                    toastr.warning('El usuario fue eliminado correctamente.', 'USUARIO ELIMINADO', {timeOut:3000});
                    $('#users_table').DataTable().ajax.reload();
                }, 400);
                //$('#btnEliminar').text('Eliminar');
            }
        });
    });
</script>

<!-- OBTENER DATOS DEL USUARIO DEL DATATABLE -->
<script>
    function editarUsuario(id){
        $.get('usuarios/editar/'+id, function(usuario){
            //Asignar los datos recuperados a la ventana modal
            $('#User_id').val(usuario[0].id);
            $('#name').val(usuario[0].name);
            $('#surname').val(usuario[0].surname);
            $('#dni').val(usuario[0].dni);
            $('#state').val(usuario[0].state);
            $('#state').trigger('change');
            $('#rol').val(usuario[0].roles[0].name);
            $('#rol').trigger('change');
            $('#email').val(usuario[0].email);
            $("input[name=_token]").val();
            $('#UserModal').modal('toggle');
        });
    }
</script>

<!-- ACTUALIZAR DATOS DEL USUARIO -->
<script>
    $(document).ready(function() {
        $('#user-form').submit(function(e){
            e.preventDefault();

            var id2 = $('#User_id').val();
            var name2 = $('#name').val();
            var surname2 = $('#surname').val();
            var dni2 = $('#dni').val();
            var state2 = $('#state').val();
            var rol2 = $('#rol').val();
            var email2 = $('#email').val();
            var password2 = $('#password').val();
            var password_confirmation2 = $('#password_confirmation').val();
            var _token2 = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('admin.users.update') }}",
                method: "POST",
                data:{
                    id: id2,
                    name: name2,
                    surname: surname2,
                    dni: dni2,
                    state: state2,
                    roles: rol2,
                    email: email2,
                    password: password2,
                    password_confirmation: password_confirmation2,
                    _token: _token2
                },
                success:function(response){
                    if(response.errors){
                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display','block');
                        $.each(response.errors, function( key, value ) {
                            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                        });
                    }
                    else{
                        $('.print-error-msg').hide();
                        $('#UserModal').modal('hide');
                        toastr.success('Los datos del usuario fueron actualizados con éxito', 'USUARIO ACTUALIZADO', {timeOut:3000});
                        $('#users_table').DataTable().ajax.reload();
                    }
                }
            });
        });
    });
    /*function ModificarUsuario()
    {
        if ($('#user-form').valid())
        {

        }
    }*/

    /*function EliminarUsuario()
    {
        if ($('#user-form').valid())
        {

        }
    }*/
</script>

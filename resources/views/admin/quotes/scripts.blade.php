<!-- LISTAR CITAS CON DATATABLE Y DATEPICKER -->
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
            $('#quotes_table').DataTable({
                processing: false,
                serverSide: true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language": {
                    "url": "/assets/js/datatable.es.json"
                },
                ajax: {
                    url: "{{ route('admin.quotes.index') }}",
                    data: {from_date: from_date, to_date: to_date}
                },
                rowReorder: {
                    dataSrc: "id"
                },
                columns:[
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    //{data: 'id', name: 'id'},
                    {data: 'client', name: 'client'},
                    {data: 'phone', name: 'phone'},
                    //{data: 'email', name: 'email'},
                    //{data: 'date', name: 'date'},
                    //{data: 'time', name: 'time'},
                    //{data: 'service.service', name: 'service.service'},
                    {data: 'state', name: 'state'},
                    {data: 'action', name: 'action', orderable: false}
                ]
            });
        }

        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();

            if (from_date != '' && to_date != '')
            {
                $('#quotes_table').DataTable().destroy();
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
            $('#quotes_table').DataTable().destroy();
            load_data();
        });
    });
</script>

<!-- OBTENER DATOS DE LA CITA DEL DATATABLE -->
<script>
    function editarCita(id){
        $.get('citas/editar/'+id, function(cita){
            //Asignar los datos recuperados a la ventana modal
            $('#Quote_id').val(cita[0].id);
            $('#txtClient').val(cita[0].client);
            $('#txtPhone').val(cita[0].phone);
            $('#txtEmail').val(cita[0].email);
            $('#txtDate').val(moment(cita[0].date).format('DD/MM/YYYY'));
            $('#txtDescription').val(cita[0].description);
            //$('#txtService').val(cita[0].service.service);
            $('#txtState').val(cita[0].state);
            $("input[name=_token]").val();
            $('#QuoteModal').modal('toggle');
            $('#QuoteModal').on('shown.bs.modal', function () {
                $('#txtDescription').focus();
            })
        });
    }
</script>

<!-- ACTUALIZAR ESTADO DE LA CITA / ENVIAR CORREO ELECTRÓNICO -->
<script>
    $(function(){
        $('#quote-form').submit(function(e){
            e.preventDefault();
        });
    });

    function CambiarEstado()
    {
        if ($('#quote-form').valid())
        {
            var id2 = $('#Quote_id').val();
            var client2 = $('#txtClient').val();
            var phone2 = $('#txtPhone').val();
            var email2 = $('#txtEmail').val();
            var date2 = $('#txtDate').val();
            var description2 = $('#txtDescription').val();
            //var service_id2 = $('#txtService').val();
            var state2 = $('#txtState').val();
            var _token2 = $("input[name=_token]").val();
            var validation;

            if (state2 == "Atendida")
            {
                validation = "Pendiente";
            }

            else if (state2 == "Pendiente")
            {
                validation = "Atendida";
            }

            $.ajax({
                url: "{{ route('admin.quotes.update') }}",
                method: "POST",
                data:{
                    id: id2,
                    client: client2,
                    phone: phone2,
                    email: email2,
                    date: date2,
                    description: description2,
                    //service_id: service_id2,
                    state: state2,
                    _token: _token2
                },
                success:function(response){
                    if(response){
                        $('#QuoteModal').modal('hide');
                        toastr.success('Se cambió el estado de la cita ha ' + validation, 'ESTADO DE CITA', {timeOut:3000});
                        $('#quotes_table').DataTable().ajax.reload();
                    }
                }
            });
        }
    }

    function EnviarCorreo()
    {
        if ($('#quote-form').valid())
        {
            var id2 = $('#Quote_id').val();
            var client2 = $('#txtClient').val();
            var phone2 = $('#txtPhone').val();
            var email2 = $('#txtEmail').val();
            var date2 = $('#txtDate').val();
            var description2 = $('#txtDescription').val();
            //var service_id2 = $('#txtService').val();
            var state2 = $('#txtState').val();
            var _token2 = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('admin.messages.store') }}",
                method: "POST",
                data:{
                    id: id2,
                    client: client2,
                    phone: phone2,
                    email: email2,
                    date: date2,
                    description: description2,
                    //service_id: service_id2,
                    state: state2,
                    _token: _token2
                },
                success:function(response){
                    if(response){
                        $('#QuoteModal').modal('hide');
                        toastr.success('Se envió el mensaje al correo ' + email2, 'MENSAJE ENVIADO', {timeOut:3000});
                        $('#quotes_table').DataTable().ajax.reload();
                    }
                }
            });
        }
    }
</script>

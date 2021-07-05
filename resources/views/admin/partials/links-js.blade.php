    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/5.0.0/autosize.min.js"></script>
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- DatePicker / jQuery UI -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery.ui.datepicker.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="/adminlte/plugins/select2/js/select2.min.js"></script>
    <!-- DatePicker -->
    <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/adminlte/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/js/adminlte.min.js"></script>

    <!-- MOSTRAR MODAL DE AUTENTICACIÓN -->
    <script>
        $('#exampleModal').modal('show');
    </script>

    <!-- INICIALIZAR SELECT2 -->
    <script>
        $(document).ready(function() {
            $('.selState').select2 ({
                placeholder: "Seleccione un Estado",
                minimumResultsForSearch: Infinity,
                dropdownAutoWidth: true,
                width: "67%",
            });
        });

        $(document).ready(function() {
            $('.selState2').select2 ({
                placeholder: "Seleccione un Estado",
                minimumResultsForSearch: Infinity,
                dropdownAutoWidth: true,
                width: "67%",
            });
        });

        $(document).ready(function() {
            $('.selRol').select2 ({
                placeholder: "Seleccione un Rol",
                minimumResultsForSearch: Infinity,
                dropdownAutoWidth: true,
                width: "67%"
            });
        });
    </script>

    @include('admin.quotes.scripts')
    @include('admin.users.scripts')
</body>
</html>

@include('admin.partials.links-css')

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark-primary navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav flex-row w-100">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block px-2 mr-auto">
                    <a href="{{ route('admin') }}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin') }}" class="brand-link">
                <img src="/adminlte/img/VyN.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::guard('workers')->user()->name }} - {{ Auth::guard('workers')->user()->roles->first()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                @include('admin.partials.nav')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="{{ route('index') }}"><b>V&N BEAUTY COLOR</b></a>.</strong> Todos los derechos reservados.
        </footer>
    </div>
    <!-- ./wrapper -->

@include('admin.partials.links-js')

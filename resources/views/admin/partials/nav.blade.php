<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="{{ route('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Inicio</p>
            </a>
        </li>
        <li class="nav-item has-treeview {{ request()->is('admin/citas') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('admin/citas') ? 'active' : '' }}">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>Citas<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link {{ request()->is('admin/citas') ? 'active' : '' }}">
                        <i class="fas fa-eye nav-icon"></i>
                        <p>Ver Citas</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>SPA<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-cubes nav-icon"></i>
                        <p>Productos</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-bars nav-icon"></i>
                        <p>Servicios</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Cartera Clientes<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-male nav-icon"></i>
                        <p>Clientes</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-dollar-sign nav-icon"></i>
                        <p>Pedidos</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Reportes<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-list-alt nav-icon"></i>
                        <p>Reporte de Ventas</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-archive nav-icon"></i>
                        <p>Reporte de Existencias</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-minus"></i>
                <p>Gastos<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}" class="nav-link">
                        <i class="fas fa-calendar-plus nav-icon"></i>
                        <p>Registro de Gastos</p>
                    </a>
                </li>
            </ul>
        </li>
        @if (Auth::guard('workers')->user()->roles->first()->name == 'Administrador')
            <li class="nav-item has-treeview {{ request()->is('admin/usuarios') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/usuarios') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>Usuarios<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->is('admin/usuarios') ? 'active' : '' }}">
                            <i class="far fa-address-book nav-icon"></i>
                            <p>Lista de usuarios</p>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</nav>

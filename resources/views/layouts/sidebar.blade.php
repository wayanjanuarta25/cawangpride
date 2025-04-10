<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">INVENTECH</span>
    </a> --}}

    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">INVENTECH</span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.superadmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Manajemen Barang -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Manajemen Materiil
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('barang.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Materiil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('stok_barang.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stok Materiil</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transaksi -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('barang_masuk.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Materiil Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('barang_keluar.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Materiil Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Data Master -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jenismateriil.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Materiil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subjenis.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Jenis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subsubjenis.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Sub Jenis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gudang.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gudang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('status.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Status</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Manajemen User (Superadmin Only) -->
                @if (auth()->user()->hasRole('superadmin'))
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manajemen User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Role & Permission</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <!-- Laporan -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('laporan.barang_masuk') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Barang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.barang_keluar') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Barang Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Riwayat Login (Superadmin Only) -->
                @if (auth()->user()->hasRole('superadmin'))
                    <li class="nav-item">
                        <a href="{{ route('login.history') }}" class="nav-link">
                            <i class="nav-icon fas fa-history"></i>
                            <p>Riwayat Login</p>
                        </a>
                    </li>
                @endif

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
    </div>
</aside>

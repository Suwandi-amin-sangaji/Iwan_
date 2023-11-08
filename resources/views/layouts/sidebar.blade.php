<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">IWAN</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">IW</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
            <li class="menu-header">Dashboard</li>
                <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">Data Master</li>
                <li class="{{ Request::is('registrasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('registrasi') }}"><i class="fas fa-table"></i><span>Pendaftaran</span></a></li>
            </li>
        @show
    </ul>
</aside>

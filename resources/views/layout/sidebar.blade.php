<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
{{--    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('panel.index')}}">--}}
{{--        <div>--}}
{{--        </div>--}}
{{--    </a>--}}

    <li class="nav-item active">
        <a class="nav-link" href="{{route('panel.index')}}">
            <img src="{{asset($setting->site_logo)}}" style="width: 100%; height: auto" alt="{{$setting->site_title}}">
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('panel.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Ana Sayfa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('panel.ayarlar.index')}}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ayarlar</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#musteriler" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Müşteriler</span>
        </a>
        <div id="musteriler" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('panel.customers.index')}}">Müşteriler</a>
                <a class="collapse-item" href="{{route('panel.customers.create')}}">Müşteri Ekle</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#domainler" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-bars"></i>
            <span>Domainler</span>
        </a>
        <div id="domainler" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('panel.domainler.index')}}">Domainler</a>
                <a class="collapse-item" href="{{route('panel.domainler.create')}}">Domain Ekle</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

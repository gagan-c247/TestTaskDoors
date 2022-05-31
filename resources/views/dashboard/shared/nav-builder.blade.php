<div class="c-sidebar-brand">
    <a href="{{url('/')}}">
        <img class="c-sidebar-brand-full sidebar-logo" src="{{ url('/assets/brand/logo-white-1.png') }}" style="height:50px; width: 50px;" alt="Logo">
        <img class="c-sidebar-brand-minimized sidebar-favicon" src="{{ url('assets/favicon/favicon.png') }}" alt="Logo">
    </a>
</div>
<ul class="c-sidebar-nav ps ps--active-y">
    <li class="c-sidebar-nav-item">
        @if(auth()->guard('admin')->check() && request()->segment(1) == 'admin')
            <a class="c-sidebar-nav-link {{ request()->segment(1) == 'admin' && request()->segment(2) == 'dashboard' ? 'c-active' : '' }}" href="{{ auth()->guard('admin')->check() && request()->segment(1) == 'admin' ? url('/admin') : url('/dashboard')}}"><i class="cil-speedometer c-sidebar-nav-icon"></i>Dashboard </a>
        @else
            <a class="c-sidebar-nav-link {{ request()->is('/') ? 'c-active' : '' }}" href="{{ auth()->guard('admin')->check() && request()->segment(1) == 'admin' ? url('/admin') : url('/dashboard')}}"><i class="cil-speedometer c-sidebar-nav-icon"></i>Dashboard </a>
        @endif
    </li>
    {{-- @can('user-section') --}}
    @can('user-section')
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="javascript:;">
                <i class="cil-user c-sidebar-nav-icon"></i>
                User Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('user-index')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('/admin/users') ? 'c-active' : '' }}" href="{{ Request::segment(1) == 'admin' ? url('/admin/users') : url('/users') }}">
                            <span class="c-sidebar-nav-icon"></span>
                            User
                        </a>
                    </li>
                @endcan
                @can('user-create')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('/admin/users/create') ? 'c-active' : '' }}" href="{{ Request::segment(1) == 'admin' ? url('/admin/users/create') : url('/users/create') }}">
                            <span class="c-sidebar-nav-icon"></span>
                            Add User
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    {{-- @endcan --}}
    @can('role-section')
        @can('role-index')
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->is('/admin/role') ? 'c-active' : '' }}" href="{{url('/admin/role')}}">
                    <i class="cil-contact c-sidebar-nav-icon"></i> Role
                </a>
            </li>
        @endcan
    @endcan
    
    @if(auth()->guard('admin')->check() && request()->segment(1) == 'admin')
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is('/admin/attribute') ? 'c-active' : '' }}" href="{{url('/admin/attribute')}}">
            <i class="cil-task c-sidebar-nav-icon"></i> Attribute Management
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is('/admin/configurator') ? 'c-active' : '' }}" href="{{url('/admin/configurator')}}">
            <i class="cil-settings c-sidebar-nav-icon"></i> Configurator Management
        </a>
    </li>
    @endif
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 519px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 420px;"></div>
    </div>
</ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button>
</div>
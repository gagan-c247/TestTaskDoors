<div class="c-sidebar-brand">
    <a href="{{url('/')}}">
        <img class="c-sidebar-brand-full sidebar-logo" src="{{ url('/assets/brand/logo-white.png') }}" alt="Logo">
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
    @if(auth()->guard('admin')->check() && Request::segment(1) == 'admin')
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="javascript:;">
                <i class="cil-user c-sidebar-nav-icon"></i>
                Business Owner Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/users') ? 'c-active' : '' }}" href="{{url('/admin/users')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Business Owners
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/users/create') ? 'c-active' : '' }}" href="{{url('/admin/users/create')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Add Business Owner
                    </a>
                </li>
            </ul>
        </li>
    @endif
    {{-- @endcan --}}
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
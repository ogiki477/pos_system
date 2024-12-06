  <!--begin::Sidebar-->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{ url('assets/img/pos_logo.png') }}"  class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">POS System</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">


        @if(Auth::user()->is_role == "1")
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> 
                    <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard')  @else active @endif"> <i class="nav-icon bi bi-speedometer"></i> 
                    <p>Dashboard</p></a>

                    
                </li>

                <li class="nav-item menu-open"> 
                    <a href="{{ url('admin/user/list') }}" class="nav-link @if(Request::segment(2) == 'dashboard')  @else active @endif"> <i class="nav-icon bi bi-person"></i> 
                    <p>User</p></a>
                </li>
                       
                       
            </ul> <!--end::Sidebar Menu-->
        </nav>
        @endif


        @if(Auth::user()->is_role == "2")
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> 
                    <a href="{{ url('user/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') @else active @endif  active"> <i class="nav-icon bi bi-speedometer"></i> 
                    <p>Dashboard</p></a>
                </li>  
                
                <li class="nav-item menu-open"> 
                    <a href="{{ url('admin/user/settings') }}" class="nav-link @if(Request::segment(2) == 'dashboard')  @else active @endif"> <i class="nav-icon bi bi-box"></i> 
                    <p>Settings</p></a> 
                </li>
                      
                
            </ul> <!--end::Sidebar Menu-->
        </nav>
        @endif

    </div> <!--end::Sidebar Wrapper-->
</aside> 
<!--end::Sidebar--> 
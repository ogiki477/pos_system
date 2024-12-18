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

                <li class="nav-header"> MASTER</li>

                <li class="nav-item"> 
                    <a href="{{ url('admin/category/list') }}" class="nav-link @if(Request::segment(2) == 'category')  @else active @endif"> 
                        <i class="nav-icon fa fa-cube"></i> 
                        <p>Category</p>
                    </a>
                </li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/product/list') }}" class="nav-link @if(Request::segment(2) == 'product')  @else active @endif"> 
                        <i class="nav-icon fa fa-cubes"></i> 
                        <p>Product</p>
                    </a>
                </li>


                
                <li class="nav-item"> 
                    <a href="{{ url('admin/members/list') }}" class="nav-link @if(Request::segment(2) == 'members')  @else active @endif"> 
                        <i class="nav-icon fa fa-id-card"></i> 
                        <p>Members</p>
                    </a>
                </li>


                
                <li class="nav-item"> 
                    <a href="{{ url('admin/suppliers/list') }}" class="nav-link @if(Request::segment(2) == 'suppliers')  @else active @endif"> 
                        <i class="nav-icon fa fa-truck"></i> 
                        <p>Suppliers</p>
                    </a>
                </li>

                
                <li class="nav-header">TRANSACTION</li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/expenses/list') }}" class="nav-link @if(Request::segment(2) == 'expenses')  @else active @endif"> 
                        <i class="nav-icon fas fa-money-bill"></i>
                    <p>Expenses</p>
                    </a>
                </li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/purchase/list') }}" class="nav-link @if(Request::segment(2) == 'purchase')  @else active @endif"> 
                        <i class="nav-icon fa fa-download"></i> 
                        <p>Purchase</p>
                    </a>
                </li>


                
                <li class="nav-item"> 
                    <a href="{{ url('admin/sales/list') }}" class="nav-link @if(Request::segment(2) == 'sales')  @else active @endif"> 
                        <i class="nav-icon fa fa-money-bill"></i> 
                        <p>Sales List</p>
                    </a>
                </li>


                
                <li class="nav-item"> 
                    <a href="{{ url('admin/new_transactions/list') }}" class="nav-link @if(Request::segment(2) == 'new_transactions')  @else active @endif"> 
                        <i class="nav-icon fa fa-cart-plus"></i> 
                        <p>New Transactions</p>
                    </a>
                </li>


                
                
                <li class="nav-item"> 
                    <a href="{{ url('admin/active_transactions/list') }}" class="nav-link @if(Request::segment(2) == 'active_transactions')  @else active @endif"> 
                        <i class="nav-icon fa fa-cart-arrow-down"></i> 
                        <p>Active Transactions</p>
                    </a>
                </li>

                
                <li class="nav-header">REPORT</li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/income_report/list') }}" class="nav-link @if(Request::segment(2) == 'income_report')  @else active @endif"> 
                        <i class="nav-icon  fas fa-file-pdf"></i> 
                        <p>Income Report</p>
                    </a>
                </li>

                
                <li class="nav-header">SYSTEM</li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/users/list') }}" class="nav-link @if(Request::segment(2) == 'users')  @else active @endif"> 
                        <i class="nav-icon  fa fa-users"></i> 
                        <p>User</p>
                    </a>
                </li>

                
                <li class="nav-item"> 
                    <a href="{{ url('admin/settings/list') }}" class="nav-link @if(Request::segment(2) == 'settings')  @else active @endif"> 
                        <i class="nav-icon  fas fa-cog"></i> 
                        <p>settings</p>
                    </a>
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
 <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ url('/admin') }}" class="logo-link nk-sidebar-logo">
             <img class="logo-light logo-img" src="{{ url('/') }}/public/images/logo.png" srcset="{{ url('/') }}/public/images/logo.png" alt="logo">
             <img class="logo-small logo-img logo-img-small" src="{{ url('/') }}/public/images/logo.png" srcset="{{ url('/') }}/public/images/logo.png" alt="logo-small"> 
             <!-- <h3><strong>{{ config('app.name', 'Laravel') }}</strong></h3> -->
             <!-- <img class="logo-img" src="{{ url('/') }}/public/images/logo.png" srcset="{{ url('/') }}/public/images/logo.png" alt="logo"> -->
         </a>
     </div>
     <div class="nk-menu-trigger me-n2">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
            <em class="icon ni ni-menu" style="color: #00008B;"></em>
        </a>
    </div>
</div><!-- .nk-sidebar-element -->
<div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
        <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">

                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">DASHBOARDS</h6>
                </li><!-- .nk-menu-heading -->


                <li class="nk-menu-item warning-popup-class">

                    <a href="{{ url('admin') }}" class="nk-menu-link nk-menu-switch" data-target="navDashboards" data-bs-original-title="" title="">
                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                        <span class="nk-menu-text">Dashboard</span>
                    </a>
                </li>
            </li>

            <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle" data-bs-original-title="" title="">
                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                    <span class="nk-menu-text">Customers</span>
                </a>
                <ul class="nk-menu-sub" style="display: none;">
                    <li class="nk-menu-item">
                        <a href="{{ route('customers.create') }}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Customer Add</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/customers') }}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Customer List</span></a>
                    </li>
                </ul><!-- .nk-menu-sub -->
            </li>

              <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle" data-bs-original-title="" title="">
                    <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                    <span class="nk-menu-text">Category</span>
                </a>
                
                <ul class="nk-menu-sub" style="display: none;">
                    <li class="nk-menu-item">
                        <a href="{{ route('category.create') }}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Category Add</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/category') }}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Category List</span></a>
                    </li>
                </ul><!-- .nk-menu-sub -->
            </li>



        </ul><!-- .nk-menu -->
    </div><!-- .nk-sidebar-menu -->
</div><!-- .nk-sidebar-content -->
</div><!-- .nk-sidebar-element -->
</div>
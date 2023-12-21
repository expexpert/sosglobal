 <div class="nk-header nk-header-fixed is-light">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
      </div>
      <div class="nk-header-brand d-xl-none">
        <a href="{{ url('/') }}" class="logo-link">
      {{ config('app.name', 'Laravel') }}
        </a>
      </div><!-- .nk-header-brand -->
      <span> Welcome  </span>
      <div class="nk-header-search ms-3 ms-xl-0">
      <strong>  <span>


       {{ Auth::user()->name }}
           


     </span></strong>
      </div>
      <div class="nk-header-tools">
        <ul class="nk-quick-nav">
          
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
              <div class="user-toggle">
               <div class="user-avatar sm">
                 @if(isset(Auth::user()->image))
                 <img src="{{ asset('public/backend/images/profile/') }}/{{ Auth::user()->image }}" class="thumb" alt="User Image">
                 @else
             
                                                    <em class="icon ni ni-user-alt"></em>
                                           

                 @endif
                 
                 <!-- <span>AB</span> -->
               </div>

               <div class="user-info d-none d-xl-block">
                <div class="user-status user-status-unverified">Welcome</div>
                <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
              <div class="user-card">
                <div class="user-avatar">
                   @if(isset(Auth::user()->image))
                 <img src="{{ asset('public/backend/images/profile/') }}/{{ Auth::user()->image }}" class="thumb" alt="User Image">
                 @else
             
                                                    <em class="icon ni ni-user-alt"></em>
                                           

                 @endif
                 
                </div>
                <div class="user-info">
      
       <span class="lead-text">{{ Auth::user()->name }}</span>
                  <span class="sub-text">{{ Auth::user()->email }}</span>
                    

           
                </div>
              </div>
            </div>
        
            <div class="dropdown-inner">
              <ul class="link-list">
                <li>
               
                        <a href="{{ url('admin/profile') }}">
                  

                    <em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
               <!--    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                  <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                  <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> -->
                </ul>
              </div>
               
              <div class="dropdown-inner">
                <ul class="link-list">
                  <li>
                   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-close="true"><em class="icon ni ni-signout"></em><span>Sign out</span> </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div><!-- .nk-header-wrap -->
</div><!-- .container-fliud -->
</div>
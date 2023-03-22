<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{Request::is('admin.dashboard') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{Request::is('admin.dashboard') ? 'active':''}}" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li class="sidebar-item {{Request::is('admin.user.index') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.user.index')}}" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span class="hide-menu">User Entry</span></a>
                </li>
                <li class="sidebar-item {{Request::is('admin.logout') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.logout')}}" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{Request::is('admin.dashboard') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{Request::is('admin.dashboard') ? 'active':''}}" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu"> Website Content </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.category.index')}}" class="sidebar-link {{Request::is('admin.category.index') ? 'active':''}}"><i class="fas fa-list"></i><span class="hide-menu"> Category Entry </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.subcategory.index')}}" class="sidebar-link {{Request::is('admin.subcategory.index') ? 'active':''}}"><i class="fas fa-list"></i><span class="hide-menu"> Subcategory Entry </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.news.index')}}" class="sidebar-link {{Request::is('admin.news.index') ? 'active':''}}"><i class="fas fa-list"></i><span class="hide-menu"> News Entry </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{Request::is('admin.user.index') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.user.index')}}" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span class="hide-menu">User Entry</span></a>
                </li>
                <li class="sidebar-item {{Request::is('admin.settings') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.settings')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a>
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
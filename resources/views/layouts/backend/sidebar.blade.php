@php
$access = App\Models\AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
->pluck('permissions')
->toArray();
@endphp
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(in_array("dashboardView", $access))
                <li class="sidebar-item {{ Request::is('admin.dashboard') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @endif

                @if(in_array("pendingNews", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.news.pending') }}" class="sidebar-link {{ Request::is('admin.news.pending') ? 'active' : '' }}"><i class="fas fa-spinner"></i><span class="hide-menu"> Pending News </span></a>
                </li>
                @endif
                @if(in_array("newsEntry", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.news.create') }}" class="sidebar-link {{ Request::is('admin.news.create') ? 'active' : '' }}">
                        <i class="fas fa-plus"></i>
                        <span class="hide-menu"> News Entry </span>
                    </a>
                </li>
                @endif
                @if(in_array("newsList", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.news.manage') }}" class="sidebar-link {{ Request::is('admin.subcategory.index') ? 'active' : '' }}">
                        <i class="fas fa-arrow-right"></i>
                        <span class="hide-menu"> News List </span>
                    </a>
                </li>
                @endif
                @if(in_array("newsList", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.heading.create') }}" class="sidebar-link {{ Request::is('admin.heading.create') ? 'active' : '' }}">
                        <i class="fas fa-arrow-right"></i>
                        <span class="hide-menu"> News Heading </span>
                    </a>
                </li>
                @endif
                @if(in_array("archiveNews", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.news.archive') }}" class="sidebar-link {{ Request::is('admin.news.archive') ? 'active' : '' }}">
                        <i class="fas fa-arrow-right"></i>
                        <span class="hide-menu"> News Archive </span>
                    </a>
                </li>
                @endif
                @if(in_array("employeeEntry", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.employee.entry') }}" class="sidebar-link {{ Request::is('admin.employee.entry') ? 'active' : '' }}"><i class="fas fa-plus"></i><span class="hide-menu"> Employee Entry </span></a>
                </li>
                @endif
                @if(in_array("employeeList", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.employee.list') }}" class="sidebar-link {{ Request::is('admin.employee.list') ? 'active' : '' }}"><i class="fas fa-list-ol"></i><span class="hide-menu"> Employee List </span></a>
                </li>
                @endif
                @if(in_array("advertiseOne", $access) || in_array("advertiseTwo", $access) || in_array("advertiseThree", $access) || in_array("advertiseFour", $access) || in_array("advertiseFive", $access))
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-earth"></i>
                        <span class="hide-menu"> Manage Advertisement</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        @if(in_array("advertiseOne", $access))
                        <li class="sidebar-item">
                            <a href="{{ route('admin.advertise_one.create') }}" class="sidebar-link {{ Request::is('admin.advertise_one.create') ? 'active' : '' }}">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu"> Advertisement Entry 1 </span>
                            </a>
                        </li>
                        @endif
                        @if(in_array("advertiseTwo", $access))
                        <li class="sidebar-item">
                            <a href="{{ route('admin.advertise_two.create') }}" class="sidebar-link {{ Request::is('admin.advertise_two.create') ? 'active' : '' }}">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu"> Advertisement Entry 2 </span>
                            </a>
                        </li>
                        @endif
                        @if(in_array("advertiseThree", $access))
                        <li class="sidebar-item">
                            <a href="{{ route('admin.advertise_three.create') }}" class="sidebar-link {{ Request::is('admin.advertise_three.create') ? 'active' : '' }}">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu"> Advertisement Entry 3 </span>
                            </a>
                        </li>
                        @endif
                        @if(in_array("advertiseFour", $access))
                        <li class="sidebar-item">
                            <a href="{{ route('admin.advertise_four.create') }}" class="sidebar-link {{ Request::is('admin.advertise_four.create') ? 'active' : '' }}">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu"> Advertisement Entry 4 </span>
                            </a>
                        </li>
                        @endif
                        @if(in_array("advertiseFive", $access))
                        <li class="sidebar-item">
                            <a href="{{ route('admin.advertise_five.create') }}" class="sidebar-link {{ Request::is('admin.advertise_five.create') ? 'active' : '' }}">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu"> Advertisement Entry 5 </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array("categorywiseaddsEntry", $access))
                <li class="sidebar-item {{ Request::is('admin.categorywiseadds.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.categorywiseadds.create') }}" aria-expanded="false"><i class="fa fa-filter"></i><span class="hide-menu">Category Wise Adds</span></a>
                </li>
                @endif
                @if(in_array("categorywiseaddsEntry", $access))
                <li class="sidebar-item {{ Request::is('admin.footerpage.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.footerpage.create') }}" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Pages Footer</span></a>
                </li>
                @endif
                @if(in_array("epaperEntry", $access))
                <li class="sidebar-item {{ Request::is('admin.epaper.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.epaper.create') }}" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Epaper Entry</span></a>
                </li>
                @endif
                @if(in_array("userEntry", $access))
                <li class="sidebar-item {{ Request::is('admin.user.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.user.create') }}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">User Entry</span></a>
                </li>
                @endif
                @if(in_array("categoryEntry", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.category.index') }}" class="sidebar-link {{ Request::is('admin.category.index') ? 'active' : '' }}"><i class="fas fa-plus"></i><span class="hide-menu"> Category Entry </span></a>
                </li>
                @endif
                @if(in_array("editorEntry", $access))
                <li class="sidebar-item">
                    <a href="{{ route('admin.editor.index') }}" class="sidebar-link {{ Request::is('admin.editor.index') ? 'active' : '' }}"><i class="fas fa-plus"></i><span class="hide-menu"> Editor Entry </span></a>
                </li>
                @endif

                @if(in_array("designationEntry", $access))

                <li class="sidebar-item {{ Request::is('admin.designation.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.designation.create') }}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Designation Entry</span></a>
                </li>
                @endif
                @if(in_array("departmentEntry", $access))
                <li class="sidebar-item {{ Request::is('admin.department.create') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.department.create') }}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Department Entry</span></a>
                </li>
                @endif
                @if(in_array("settingUpdate", $access))
                <li class="sidebar-item {{ Request::is('admin.newsletteradds') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.newsletteradds') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">NewsLetterAdds</span></a>
                </li>
                @endif

                @if(in_array("settingUpdate", $access))
                <li class="sidebar-item {{ Request::is('admin.settings') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.settings') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a>
                </li>
                @endif
                <li class="sidebar-item {{ Request::is('admin.logout') ? 'selected' : '' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.logout') }}" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<style>
  .main-sidebar .sidebar-menu {
    margin-right: 8px;
    margin-left: 8px;
  }
</style>

<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="javascript:void(0);"> <img alt="image" src="{{ asset('assets/admin/img/logo.png') }}" class="header-logo" /> <span
                class="logo-name">{{ucfirst(basename(base_path()))}}</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">@yield('title')</li>

            @if(Gate::check('dashboard-list'))
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboards.index') }}"><i class="fa fa-tachometer" style="margin-left: 1px !important; width: 20px; margin-right: 3px;"></i><span style="margin-left: 5px;">Dashboard</span></a></li>
            @endif

            @if(Gate::check('role-list') || Gate::check('role-create'))
            <li class="dropdown {{ Request::is('admin/roles', 'admin/roles/create', 'admin/roles/create', 'admin/roles/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Roles</span></a>
              <ul class="dropdown-menu">
                @can('role-list')
                <li class="{{ Request::is('admin/roles') ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.index') }}">All Roles</a></li>
                @endcan
                @can('role-create')
                <li class="{{ Request::is('admin/roles/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.create') }}">Add Role</a></li>
                @endcan
              </ul>
            </li>
            @endif

            @if(Gate::check('permission-list') || Gate::check('permission-create'))
            <li class="dropdown {{ Request::is('admin/permissions', 'admin/permissions/create', 'admin/permissions/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="activity"></i><span>Permissions</span></a>
              <ul class="dropdown-menu">
                @can('permission-list')
                <li class="{{ Request::is('admin/permissions') ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.index') }}">All Permissions</a></li>
                @endcan
                @can('permission-create')
                <li class="{{ Request::is('admin/permissions/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.create') }}">Add Permission</a></li>
                @endcan
              </ul>
            </li>
            @endif

            @if(Gate::check('user-list') || Gate::check('user-create'))
            <li class="dropdown {{ Request::is('admin/users', 'admin/users/create', 'admin/users/*', 'admin/brokerages', 'admin/brokerages/create', 'admin/brokerages/*', 'admin/students', 'admin/students/create', 'admin/students/*', 'admin/partners', 'admin/partners/create', 'admin/partners/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>Users</span></a>
              <ul class="dropdown-menu">
                @can('user-list')
                <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}">All Users</a></li>
                @endcan
                @can('user-create')
                <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.create') }}">Add User</a></li>
                @endcan

                @can('brokerage-list')
                <li class="{{ Request::is('admin/brokerages') ? 'active' : '' }}"><a class="nav-link" href="{{ route('brokerages.index') }}">All Brokerages</a></li>
                @endcan
                @can('brokerage-create')
                <li class="{{ Request::is('admin/brokerages/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('brokerages.create') }}">Add Brokerage</a></li>
                @endcan

                @can('student-list')
                <li class="{{ Request::is('admin/students') ? 'active' : '' }}"><a class="nav-link" href="{{ route('students.index') }}">All Students</a></li>
                @endcan
                @can('student-create')
                <li class="{{ Request::is('admin/students/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('students.create') }}">Add Student</a></li>
                @endcan

                @can('partner-list')
                <li class="{{ Request::is('admin/partners') ? 'active' : '' }}"><a class="nav-link" href="{{ route('partners.index') }}">All Partners</a></li>
                @endcan
                @can('partner-create')
                <li class="{{ Request::is('admin/partners/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('partners.create') }}">Add Partner</a></li>
                @endcan

              </ul>
            </li>
            @endif

            @if(Gate::check('promo-code-list') || Gate::check('promo-code-create'))
            <li class="dropdown {{ Request::is('admin/promo-codes', 'admin/promo-codes/create', 'admin/promo-codes/create', 'admin/promo-codes/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="tag"></i><span>Promo Codes</span></a>
              <ul class="dropdown-menu">
                @can('promo-code-list')
                <li class="{{ Request::is('admin/promo-codes') ? 'active' : '' }}"><a class="nav-link" href="{{ route('promocodes.index') }}">All Promo Codes</a></li>
                @endcan
                @can('promo-code-create')
                <li class="{{ Request::is('admin/promo-codes/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('promocodes.create') }}">Add Promo Codes</a></li>
                @endcan
              </ul>
            </li>
            @endif

            @if(Gate::check('course-list') || Gate::check('course-create') || Gate::check('course-category-list') || Gate::check('course-category-create'))
            <li class="dropdown {{ Request::is('admin/courses', 'admin/courses/create', 'admin/courses/*', 'admin/course-categories', 'admin/course-categories/create', 'admin/course-categories/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="layers"></i><span>Course Management</span></a>
              <ul class="dropdown-menu">
                @can('course-category-list')
                <li class="{{ Request::is('admin/course-categories') ? 'active' : '' }}"><a class="nav-link" href="{{ route('coursecategories.index') }}">Categories</a></li>
                @endcan
                @can('course-list')
                <li class="{{ Request::is('admin/courses') ? 'active' : '' }}"><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>
                @endcan
              </ul>
            </li>
            @endif

            @if(Gate::check('content-list') || Gate::check('content-create'))
            <li class="dropdown {{ Request::is('admin/contents', 'admin/contents/create/', 'admin/contents/*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Contents</span></a>
              <ul class="dropdown-menu">
                @can('content-list')
                <li class="{{ Request::is('admin/contents') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contents.index') }}">All Content</a></li>
                @endcan
                @can('content-create')
                <li class="{{ Request::is('admin/contents/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contents.create') }}">Add Content</a></li>
                @endcan
              </ul>
            </li>
            @endif

             @if(Gate::check('setting-list') || Gate::check('setting-list'))
            <li class="dropdown {{ Request::is('admin/settings', 'admin/logs') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>General Settings</span></a>
              <ul class="dropdown-menu">
          
                @can('log-list')
                <li class="{{ Request::is('admin/logs') ? 'active' : '' }}"><a class="nav-link" href="{{ route('logs.index') }}">All Logs</a></li>
                @endcan 
                @can('setting-list')
                <li class="{{ Request::is('admin/settings') ? 'active' : '' }}"><a class="nav-link" href="{{ route('settings.index') }}">Settings</a></li>
                @endcan
                @can('updates-list')
                <li class="{{ Request::is('admin/updates') ? 'active' : '' }}"><a class="nav-link" href="{{ route('update.index') }}">Updates</a></li>
                @endcan               
              </ul>
            </li>
            @endif
            
          </ul>
        </aside>
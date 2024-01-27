<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #f7d217">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <img src="{{ ('/assets/img/logoIF.png') }}" style="width: 40px; weight: 40px;" >
                <div class="sidebar-brand-text mx-3 font-weight-bold m-1" style="color: black">{{ __('SIREKAN') }}</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <span class="font-weight-bold" style="color: black">{{ __('Dashboards') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span class="font-weight-bold" style="color: black">{{ __('Manajemen User') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}" style="color: black"> <i class="fa fa-id-card mr-2"></i></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}" style="color: black"><i class="fa fa-users mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}" style="color: black"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseBook" aria-expanded="true" aria-controls="collapseTwo">
                    <span class="font-weight-bold" style="color: black">{{ __('Reservasi Ruangan') }}</span>
                </a>
                <div id="collapseBook" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/arenas') || request()->is('admin/arenas/*') ? 'active' : '' }}" href="{{ route('admin.arenas.index') }}" style="color: black"><i class="fa fa-building mr-2"></i> {{ __('Data Ruangan') }}</a>
                        <a class="collapse-item {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}" href="{{ route('admin.bookings.index') }}" style="color: black"><i class="fa fa-book mr-2"></i> {{ __('Data Reservasi') }}</a>
                    </div>
                </div>
            </li>


        </ul>
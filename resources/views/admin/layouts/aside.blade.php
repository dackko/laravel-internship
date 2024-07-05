<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item @if(Request::segment(2) == 'dashboard') menu-open @endif">
            <a href="#" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item @if(Request::segment(2) == 'users') menu-open @endif">
            <a href="#" class="nav-link @if(Request::segment(2) == 'users') active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Users
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Users</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item @if(Request::segment(2) == 'categories') menu-open @endif">
            <a href="#" class="nav-link @if(Request::segment(2) == 'categories') active @endif">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    Categories
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link @if(Request::segment(3) == '' && Request::segment(2) == 'categories') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.create') }}" class="nav-link @if(Request::segment(3) == 'create') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Category</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item @if(Request::segment(2) == 'posts') menu-open @endif">
            <a href="#" class="nav-link @if(Request::segment(2) == 'posts') active @endif">
                <i class="nav-icon fas fa-blog"></i>
                <p>
                    Posts
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link @if(Request::segment(3) == '' && Request::segment(2) == 'posts') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Posts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.posts.create') }}" class="nav-link @if(Request::segment(3) == 'create') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Post</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->

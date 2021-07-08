    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main Menu</span>
                </li>
                <li class="active"> 
                    <a href="{{ route('admin.home') }}"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('article.index') }}"><i class="fas fa-user-graduate"></i> <span> Blogs</span></a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"><i class="fas fa-chalkboard-teacher"></i> <span> Categories</span></a>
                </li>
                <li>
                    <a href="{{ route('staff.create') }}"><i class="fas fa-building"></i> <span> Add Staff</span></a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"><i class="fas fa-book-reader"></i> <span> Users</span></a>
                </li>
            </ul>
        </div>
    </div>
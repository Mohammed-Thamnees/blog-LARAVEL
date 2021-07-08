    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main Menu</span>
                </li>
                <li class="active"> 
                    <a href="{{ route('staff.home') }}"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="index.html#"><i class="fas fa-user-graduate"></i> <span> Blogs</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('article.index') }}">Blogs List</a></li>
                        <li><a href="{{ route('article.create') }}">Add Blogs</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="index.html#"><i class="fas fa-chalkboard-teacher"></i> <span> Categories</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('category.index') }}">Categories List</a></li>
                        <li><a href="{{ route('category.create') }}">Add Categories</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
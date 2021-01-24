<div class="navigation-menu-body">
    <ul>
        <li class="navigation-divider">Main</li>

        <li>
            <a href="{{route('admin.index')}}">
                <i class="nav-link-icon" data-feather="home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('qurey.all')}}">
                <i class="nav-link-icon" data-feather="users"></i>
                <span>Quries</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="menu"></i>
                <span>Packages</span>
            </a>
            <ul>
                <li><a href="{{route('package.index')}}">View All Packages</a></li>
                <li><a href="{{route('package.create')}}">Add New Package</a></li>
            </ul>
        </li>

        <li>
            <a href="{{route('aboutus.edit')}}">
                <i class="nav-link-icon" data-feather="users"></i>
                <span>About</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="menu"></i>
                <span>Services</span>
            </a>
            <ul>
                <li><a href="{{route('service.index')}}">View All Services</a></li>
                <li><a href="{{route('service.create')}}">Add New Service</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="menu"></i>
                <span>FAQ'S</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('faq.index')}}">View ALL FAQ'S</a>
                </li>
                <li>
                    <a href="{{route('faq.create')}}">Add New FAQ</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="user"></i>
                <span>Users</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('user.index')}}">View All Users</a>
                </li>
                <li>
                    <a href="{{route('user.create')}}">Create New User</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="">
                <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                <span>Home Settings</span>
            </a>
            <ul>
                <li><a href="{{route('home.homeheader',1)}}">Home Header</a></li>
                <li><a href="{{route('home.internetservices',1)}}">Internet Services</a></li>
                <li><a href="{{route('home.aboutsection',1)}}">About Section</a></li>
                <li><a href="{{route('home.allservices',1)}}">All Services Section</a></li>
                <li><a href="{{route('home.packagessection',1)}}">Packages Section</a></li>
                <li><a href="{{route('home.faqsection',1)}}">FAQ Section</a></li>
            </ul>
        </li>

    </ul>
</div>

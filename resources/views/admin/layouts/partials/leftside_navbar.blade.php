<div class="navigation-menu-body">
    <ul>
        <li class="navigation-divider">Main</li>

        <li>
            <a href="{{route('qurey.all')}}">
                <i class="nav-link-icon" data-feather="users"></i>
                <span>Quries</span>
            </a>
        </li>
        <li class="open">
            <a href="">
                <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                <span>Home</span>
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
                <span>Menu Level</span>
            </a>
            <ul>
                <li>
                    <a href="#">Menu Level</a>
                    <ul>
                        <li>
                            <a href="#">Menu Level </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="{{url('')}}">BizLand<span>.</span></a></h1>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto {{ ($title === "Home") ? 'active' : ''}}" href="{{url('home')}}">Home</a></li>
        <li><a class="nav-link scrollto {{ ($title === "About") ? 'active' : ''}}" href="{{url('about')}}">About</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Services") ? 'active' : ''}}" href="{{url('services')}}">Services</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Portofolio") ? 'active' : ''}} " href="{{url('portofolio')}}">Portfolio</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Team") ? 'active' : ''}}" href="{{url('team')}}">Team</a></li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

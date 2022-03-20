<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="{{url('')}}">BizLand<span>.</span></a></h1>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto {{ ($title === "Home") ? 'active' : ''}}" href="{{url('home')}}">Home</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Supplier") ? 'active' : ''}}" href="{{url('supplier')}}">Supplier</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Stuff") ? 'active' : ''}}" href="{{url('stuff')}}">Stuff</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Portofolio") ? 'active' : ''}} " href="{{url('portofolio')}}">Portfolio</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Team") ? 'active' : ''}}" href="{{url('team')}}">Team</a></li>
        <li><a class="nav-link scrollto {{ ($title === "Pelanggan") ? 'active' : ''}}" href="{{url('pelanggan')}}">Pelanggan</a></li>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

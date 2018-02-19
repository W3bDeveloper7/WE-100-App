<div class="page-sidebar">

    <!-- Site header  -->
    <header class="site-header">
        <div class="site-logo"><a href="index.html"><img src="{{URL::asset('images/logo.png')}}" alt="CAT Digital" title="CAT Digital"></a></div>
        <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
        <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
    </header>
    <!-- /site header -->

    <!-- Main navigation -->
    <ul id="side-nav" class="main-menu navbar-collapse collapse">
        <li class="has-sub  "><a href="index.html"><i class="icon-gauge"></i><span class="title">Dashboard</span></a>
            <ul class="nav">
                <li><a href="index.html"><span class="title">Misc.</span></a></li>
                <li><a href="ecommerce-dashboard.html"><span class="title">E-Commerce</span></a></li>
                <li><a href="news-dashboard.html"><span class="title">News Portal</span></a></li>
            </ul>
        </li>
        <li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-heart"></i><span class="title">Healthy Tips</span></a>
            <ul class="nav collapse">
                <li><a href="{{ route('healthyTips.index') }}"><span class="title">Healthy Tips</span></a></li>
                <li><a href="{{ route('healthyTips.create') }}"><span class="title">Add New one</span></a></li>
            </ul>
        </li>

    </ul>
    <!-- /main navigation -->
</div>
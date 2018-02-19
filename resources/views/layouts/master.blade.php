
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="keywords" content="@yield('Keywords')">
    <title>
        @yield('title') | CatDigital
    </title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='{{URL::asset('images/fav.ico')}}' />
    <!-- /site favicon -->

    <!-- Entypo font stylesheet -->
    <link href="{{URL::asset('css/entypo.css')}}" rel="stylesheet">
    <!-- /entypo font stylesheet -->

    <!-- Font awesome stylesheet -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- /font awesome stylesheet -->

    <!-- Bootstrap stylesheet min version -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- /bootstrap stylesheet min version -->

    <!-- Mouldifi core stylesheet -->
    <link href="{{URL::asset('css/mouldifi-core.css')}}" rel="stylesheet">
    <!-- /mouldifi core stylesheet -->

    <link href="{{URL::asset('css/mouldifi-forms.css')}}" rel="stylesheet">

    <!-- Bootstrap RTL stylesheet min version -->
    {{--<link href="css/bootstrap-rtl.min.css" rel="stylesheet">--}}
    <!-- /bootstrap rtl stylesheet min version -->

    <!-- Mouldifi RTL core stylesheet -->
    {{--<link href="css/mouldifi-rtl-core.css" rel="stylesheet">--}}
    <!-- /mouldifi rtl core stylesheet -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.min.js') }}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{{URL::asset('js/plugins/flot/excanvas.min.js')}}"></script>
    <![endif]-->

    @yield('styles')
</head>
<body>

<!-- Page container -->
<div class="page-container">

    <!-- Page Sidebar -->
    @include('layouts.sidebar')
    <!-- /page sidebar -->

    <!-- Main container -->
    <div class="main-container gray-bg">

        <!-- Main header -->
        <div class="main-header row">
            <div class="col-sm-6 col-xs-7">

                <!-- User info -->
                <ul class="user-info pull-left">
                    <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="{{URL::asset('images/man-3.jpg')}}"> {{ Auth::user()->name }}<span class="caret"></span></a>

                        <!-- User action menu -->
                        <ul class="dropdown-menu">

                            <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
                            <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
                            <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
                            <li>@if (Auth::guest())
                                    <a href="{{ route('login') }}">Login</a>
                                @else

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="icon-logout"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                @endif
                        </ul>
                        <!-- /user action menu -->

                    </li>
                </ul>
                <!-- /user info -->

            </div>

            <div class="col-sm-6 col-xs-5">
                <div class="pull-right">
                    <!-- User alerts -->
                    <ul class="user-info pull-left">

                        <!-- Notifications -->
                        <li class="notifications dropdown">
                            <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
                            <ul class="dropdown-menu pull-right">
                                <li class="first">
                                    <div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
                                </li>
                                <li>
                                    <ul class="dropdown-list">
                                        <li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
                                        <li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                        <li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
                                        <li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                        <li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                        <li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                    </ul>
                                </li>
                                <li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
                            </ul>
                        </li>
                        <!-- /notifications -->

                        <!-- Messages -->
                        <li class="notifications dropdown">
                            <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
                            <ul class="dropdown-menu pull-right">
                                <li class="first">
                                    <div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
                                </li>
                                <li>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">Domnic Brown</span>
                                                    <span class="media-annotation pull-right">Tue</span>
                                                </a>
                                                <span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm" src="images/john-smith.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">John Smith</span>
                                                    <span class="media-annotation pull-right">12:30</span>
                                                </a>
                                                <span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm" src="images/stella-johnson.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">Stella Johnson</span>
                                                    <span class="media-annotation pull-right">2 days ago</span>
                                                </a>
                                                <span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm" src="images/alex-dolgove.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">Alex Dolgove</span>
                                                    <span class="media-annotation pull-right">10:45</span>
                                                </a>
                                                <span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">Domnic Brown</span>
                                                    <span class="media-annotation pull-right">4:00</span>
                                                </a>
                                                <span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
                            </ul>
                        </li>
                        <!-- /messages -->

                    </ul>
                    <!-- /user alerts -->

                </div>
            </div>
        </div>
        <!-- /main header -->

        <!-- Main content -->
        <div class="main-content">
            @yield('content')
            <!-- Footer -->
            <footer class="footer-main">
                &copy; 2018 <strong>CatDigital</strong> WE 100 App by <a target="_blank" href="#/">Dola</a>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/plugins/metismenu/jquery.metisMenu.js')}}"></script>
<script src="{{URL::asset('js/plugins/blockui-master/jquery-ui.js')}}"></script>
<script src="{{URL::asset('js/plugins/blockui-master/jquery.blockUI.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>
@yield('scripts')
</body>
</html>

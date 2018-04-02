<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('resources/admin/css/bootstrap.min.css') }}" />
{{--<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

<!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('resources/admin/css/metisMenu.min.css') }}" />
{{--<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">--}}

<!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('resources/admin/css/sb-admin-2.css') }}" />
{{--<link href="../dist/css/sb-admin-2.css" rel="stylesheet">--}}
<!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{ URL::asset('resources/admin/css/morris.css') }}" />
{{--<link href="../vendor/morrisjs/morris.css" rel="stylesheet">--}}

<!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('resources/admin/css/font-awesome.min.css') }}" />
{{--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Admin Panel</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down">{{ Auth::user()->name }}</i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('users.edit',Auth::user())}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>

                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}">All Users</a>
                            </li>
                            <li>
                                <a href="{{route('users.create')}}">Create User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Companies<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('companies.index')}}">All Companies</a>
                            </li>
                            <li>
                                <a href="{{route('companies.create')}}">Create Company</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employees<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('employees.index')}}">All Employees</a>
                            </li>
                            <li>
                                <a href="{{route('employees.create')}}">Create Employee</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>




                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                @yield('content')
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('resources/admin/js/jquery.min.js') }}"></script>
{{--<script src="../vendor/jquery/jquery.min.js"></script>--}}

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="{{URL::asset('resources/admin/js/bootstrap.min.js')}}"></script>
{{--<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>--}}

<!-- Metis Menu Plugin JavaScript -->
<script type="text/javascript" src="{{URL::asset('resources/admin/js/metisMenu.min.js')}}"></script>
{{--<script src="../vendor/metisMenu/metisMenu.min.js"></script>--}}

<!-- Morris Charts JavaScript -->
<script type="text/javascript" src="{{URL::asset('resources/admin/js/raphael.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('resources/admin/js/morris.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('resources/admin/js/morris-data.js')}}"></script>
{{--<script src="../vendor/raphael/raphael.min.js"></script>--}}
{{--<script src="../vendor/morrisjs/morris.min.js"></script>--}}
{{--<script src="../data/morris-data.js"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{asset('resources/admin/js/sb-admin-2.js')}}"></script>
{{--<script src="../dist/js/sb-admin-2.js"></script>--}}


@yield('footer')


</body>

</html>
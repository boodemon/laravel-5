<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robot" content="noindex, nofollow" />

    <title>SB Admin 2 - Bootstrap Admin Theme Modify by Saimok</title>

    <!-- Bootstrap Core CSS -->
    @include('admin.layouts.inc-stylesheet')
	@yield('stylesheet')
</head>

<body>

    <div id="wrapper" class="bg-red">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top bg-red" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" class="color-white" href="index.html">SB Admin v2.0 Modify By Saimok</a>
            </div>
            <!-- /.navbar-header -->

            @include('admin.layouts.inc-header')
            <!-- /.navbar-top-links -->

            @include('admin.layouts.inc-left-sidebar')
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	@include('admin.layouts.inc-scripts')
    @yield('scripts')
</body>

</html>

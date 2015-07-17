<div class="navbar-default sidebar bg-red" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
					<!--
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group - ->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
 						-->
                       <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Index<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/upload/index')}}">upload</a>
                                </li>
                                <li>
                                    <a href="flot.html">Album</a>
                                </li>
								<!--
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
								-->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

						<li>
                            <a  href="{{url('admin/user')}}"><i class="fa fa-user fa-fw"></i> Administrators</a>
                        </li>
						<li>
                            <a  href="{{url('admin/login/logout')}}"><i class="fa fa-unlock fa-fw"></i> Logout</a>
                        </li>

						<!--
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="{{url('admin/user')}}">Administrators</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level - ->
                        </li>
						-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
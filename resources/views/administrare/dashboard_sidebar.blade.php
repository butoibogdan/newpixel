
<aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>
                            {!! Session::get('name') !!}
                        </p>

                        <a href="{{URL::asset('logout')}}"><i class="fa fa-circle text-success"></i> Logout</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->

                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        
                        <a href="#">
                            <i class="fa fa-files-o">                     
                            </i>
                            <span>Mapamond</span>
                            <i class="fa fa-angle-left pull-right">

                            </i>
                        </a>

                        <ul class="treeview-menu">
                            <li class="active"><a href="{{URL::asset('admin/continente')}}"><i class="fa fa-circle-o"></i>Continente</a></li>
                            <li class="active"><a href="{{URL::asset('admin/tari')}}"><i class="fa fa-circle-o"></i>Tari</a></li>
                            <li class="active"><a href="{{URL::asset('admin/regiuni')}}"><i class="fa fa-circle-o"></i>Regiuni</a></li>
                            <li class="active"><a href="layout/fixed.html"><i class="fa fa-circle-o"></i>Regiuni</a></li>
                            <li class="active"><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Orase</a></li>
                            <li class="active"><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Locatii</a></li>
                        </ul>

                    </li>
                    
                                       
                    <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
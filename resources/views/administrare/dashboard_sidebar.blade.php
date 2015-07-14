        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{URL::asset('backend/images/userPic.png')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{!! Session::get('name') !!}</p>
                        <a href="{{URL::asset('logout')}}"><i class="fa fa-circle text-success"></i> Logout</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->

                <ul class="sidebar-menu">
                    <li class="header">Meniu principal</li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i><span>Mapamond</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('admin/continente')}}"><i class="fa fa-circle-o"></i>Continente</a></li>
                            <li><a href="{{URL::asset('admin/tari')}}"><i class="fa fa-circle-o"></i>Tari</a></li>
                            <li><a href="{{URL::asset('admin/regiuni')}}"><i class="fa fa-circle-o"></i>Regiuni</a></li>
                            <li><a href="{{URL::asset('admin/localitati')}}"><i class="fa fa-circle-o"></i>Localitati</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i><span>Unitati cazare</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('admin/hoteluri')}}"><i class="fa fa-circle-o"></i>Hoteluri</a></li>
                            <li><a href="{{URL::asset('admin/facilitati')}}"><i class="fa fa-circle-o"></i>Facilitati</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i><span>Oferte</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('admin/oferte')}}"><i class="fa fa-circle-o"></i>Oferte</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i><span>Facturi</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('admin/clienti')}}"><i class="fa fa-circle-o"></i>Clienti</a></li>
                            <li><a href="{{URL::asset('admin/facturi')}}"><i class="fa fa-circle-o"></i>Facturi</a></li>
                        </ul>
                    </li>


                    <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                    <li><a href="#"><i class="fa fa-book"></i> <span>Documentatie</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
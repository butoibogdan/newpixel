        <aside class="main-sidebar">
            <section class="sidebar">

                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{URL::asset('backend/images/userPic.png')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{!! Session::get('name') !!}</p>
                        <a href="{{URL::asset('logout')}}"><i class="fa fa-circle text-success"></i> Logout</a>
                    </div>
                </div>

                <ul class="sidebar-menu">
                    <li class="header">Management Website</li>
                    <li class="treeview {{ $active }}">
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

                    <li class="header">Management Clienti</li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i><span>Facturi</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('admin/clienti')}}"><i class="fa fa-circle-o"></i>Clienti</a></li>
                            <li><a href="{{URL::asset('admin/facturi')}}"><i class="fa fa-circle-o"></i>Facturi</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
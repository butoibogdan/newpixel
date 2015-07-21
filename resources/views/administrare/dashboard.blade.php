<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{config('newpixel.numeProiect')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="{{URL::asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/css/global.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/css/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/star_rating/jquery.raty.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />

        <script src='{{URL::asset("backend/plugins/jQuery/jQuery-2.1.4.min.js")}}'></script>
        <script src='{{URL::asset("backend/bootstrap/js/bootstrap.min.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/star_rating/jquery.raty.js")}}' type="text/javascript"></script>
        <script src="{{URL::asset('backend/js/fileinput.js')}}"></script>
        <script src='{{URL::asset("backend/js/ckeditor/ckeditor.js")}}'></script>
        <script src='{{URL::asset("backend/select2/dist/js/select2.full.min.js")}}' type="text/javascript"></script>    
        <script src='{{URL::asset("backend/plugins/datepicker/bootstrap-datepicker.js")}}'></script>
        <script src='{{URL::asset("backend/plugins/input-mask/jquery.inputmask.js")}}'></script>
        <script src='{{URL::asset("backend/plugins/input-mask/jquery.inputmask.date.extensions.js")}}'></script>
        <script src='{{URL::asset("backend/js/moment.js")}}'></script>
        
        <script src='{{URL::asset("backend/invoice/script.js")}}'></script>
        <script src='{{URL::asset("backend/ajax/ajax.js")}}'></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <section class="content-header"> <h1> Travel CMS <small>sistem de management al continutului pentru agentii de turism</small> </h1> </section>

                @include('administrare.dashboard_header')
                @include('administrare.dashboard_sidebar')

                @if (Request::path() == 'admin')
                @yield('content')
                @elseif (Request::path()=='admin/continente' || Request::is('admin/continente/*'))
                @yield('continente')
                @elseif (Request::path()=='admin/tari' || Request::is('admin/tari/*'))
                @yield('tari')
                @elseif (Request::path()=='admin/regiuni' || Request::is('admin/regiuni/*'))
                @yield('regiuni')
                @elseif (Request::path()=='admin/localitati' || Request::is('admin/localitati/*'))
                @yield('localitati')
                @elseif (Request::path()=='admin/hoteluri' || Request::is('admin/hoteluri/*'))
                @yield('hoteluri')
                @elseif (Request::path()=='admin/facilitati' || Request::is('admin/facilitati/*'))
                @yield('facilitati')
                @elseif (Request::path()=='admin/oferte' || Request::is('admin/oferte/*'))
                @yield('oferte')
                @elseif (Request::path()=='admin/ofertefps' || Request::is('admin/ofertefps/*'))
                @yield('ofertefp')
                @elseif (Request::path()=='admin/clienti' || Request::is('admin/clienti/*'))
                @yield('clienti')
                @elseif (Request::path()=='admin/facturi' || Request::is('admin/facturi/*'))
                @yield('facturi')
                @elseif (Request::path()=='admin/invoice' || Request::is('admin/invoice/*'))
                @yield('invoice')
                @elseif (Request::path()=='admin/voucher' || Request::is('admin/voucher/*'))
                @yield('voucher')
                @elseif (Request::path()=='admin/doc_number' || Request::is('admin/doc_number/*'))
                @yield('numerefacturi')

                @endif
                </div>

            @include('administrare/dashboard_footer')
        </div>


        <script src='{{URL::asset("backend/bootstrap/js/bootstrap.min.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/js/jquery.cookie.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/plugins/slimScroll/jquery.slimscroll.min.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/plugins/fastclick/fastclick.min.js")}}'></script>
        <script src='{{URL::asset("backend/dist/js/app.js")}}' type="text/javascript"></script>
        
    </body>
</html>
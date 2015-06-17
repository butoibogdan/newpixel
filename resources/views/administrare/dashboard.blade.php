<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{config('newpixel.numeProiect')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="{{URL::asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{URL::asset('backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="{{URL::asset('backend/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/css/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/selectinput2/chosen.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/star_rating/jquery.raty.css')}}" rel="stylesheet" type="text/css" />
        
        <script src='{{URL::asset("backend/plugins/jQuery/jQuery-2.1.4.min.js")}}'></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src='{{URL::asset("backend/bootstrap/js/bootstrap.min.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/star_rating/jquery.raty.js")}}' type="text/javascript"></script>
        <script src="{{URL::asset('backend/js/fileinput.js')}}"></script>
        <script src='{{URL::asset("backend/js/ckeditor/ckeditor.js")}}'></script>
        <script src='{{URL::asset("backend/selectinput2/chosen.jquery.min.js")}}' type="text/javascript"></script>
        <script src='{{URL::asset("backend/ajax/ajax.js")}}'></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    @yield('body')

</html>
@extends('administrare.dashboard')

@section('voucher')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Adaugare -  Voucher</h1>
                    <hr/>
                    {!! Form::open(['url' => 'admin/voucher/create/$idfactura']) !!}
                    <div class="form-group">
                        {!! Form::label('idfactura', 'Idfactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idfactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('numar', 'Numar: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            {!! Form::text('data',$datacurenta, ['placeholder'=>'Data voucher','class' => 'form-control','id'=>'datavoucher']) !!}
                        </div>
                        <script>
                            $('#datavoucher').datepicker({
                                format: 'yyyy/mm/dd',
                                startDate: '-3d'
                            });</script>
                    </div>

                    <div class="box box-primary col-md-12">
                        <div class="box-body">
                            <div class="input_fields_wrap_adulti">
                                <div class="row">
                                    <div class="col-md-11 "><input placeholder="Nume pasager" type="text" name="adulti[]" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <button class="add_field_button_adulti btn btn-info btn-sm"><i class="fa fa-plus"></i></button>
                    </div>


                    <div class="box box-primary col-md-12">
                        <div class="box-body">
                            <div class="input_fields_wrap_copii">
                                <div class="row">
                                    <div class="col-md-5 "><input id="copii" placeholder="Nume copil" type="text" name="copii[]" class="form-control"></div>
                                    <div class="col-md-4 ">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input onchange="schimba()"  id="datanasterii0" placeholder="Data nasterii" type="text" name="datanasteriicopii[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2 "><input placeholder="Varsta" type="text" class="form-control" id="varsta0"></div>
                                </div>
                            </div>
                        </div>
                        <script>

                            $("#datanasterii0").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});

                            moment.locale('en', {
                                relativeTime: {
                                    future: "in %s",
                                    past: "%s ago",
                                    s: "seconds",
                                    m: "a minute",
                                    mm: "%d minutes",
                                    h: "an hour",
                                    hh: "%d hours",
                                    d: "a day",
                                    dd: "%d days",
                                    M: "a month",
                                    MM: "%d months",
                                    y: "1 an",
                                    yy: "%d ani"

                                }
                            });

                            function schimba() {
                                for (var i = 0; i <= 9; i++) {
                                    var data2 = $('#datanasterii' + i).val();
                                    if ($('#datanasterii'+i).length != 0) {
                                        var dsplit = data2.split("/");
                                        var data = new Date(dsplit[0], dsplit[1] - 1, dsplit[2]);
                                        var data1 = moment(data).toNow(true);
                                        $('#varsta' + i).val(data1);
                                    }
                                }
                            }

                        </script>
                        <button class="add_field_button_copii btn btn-info btn-sm"><i class="fa fa-plus"></i></button>
                    </div>

                    <div class="form-group">
                        {!! Form::label('alteservicii', 'Alteservicii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('alteservicii', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="box box-primary col-md-12">
                        <div class="box-header with-border">  
                            <div class="col-md-1"><h3 class="box-title">Nr.Crt.</h3></div>
                            <div class="col-md-10"><h3 class="box-title">Denumire Produs</h4></div>
                            <div class="col-md-1"><h3 class="box-title">Cant.</h3></div>
                        </div>
                        <div class="box-body">
                            @foreach($produse as $key=>$elemente)
                            <div class="col-md-1"><div class="form-control">{{$key+1}}</div></div>
                            <div class="col-md-10"><div class="form-control">{{$elemente->denumireprodus}}</div></div>
                            <div class="col-md-1"><div class="form-control">{{$elemente->cantitateprodus}}</div></div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Adauga', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

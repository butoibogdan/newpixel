@extends('administrare.dashboard')

@section('facturi')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h2>Edit Factura Factura</h2>

                    {!! Form::model($facturi, ['method' => 'PATCH', 'action' => ['AdminController\Pages\FacturiController@update', $facturi->id]]) !!}

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date client</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::select('idclient',$client+$clienti, null, ['onchange'=>'dateclient()','id'=>'select_client','class' => 'form-control']) !!}
                                        <script>
                                            $("#select_client").select2({
                                                placeholder: "Selectati Clientul",
                                                width: "100%"
                                            });
                                        </script>
                                    </div>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date Factura</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::select('tipfactura',[''=>'','0'=>'Factura Proforma','1'=>'Factura Fiscala'], null, ['id'=>'select_tipfactura','class' => 'form-control']) !!}
                                        <script>
                                            $("#select_tipfactura").select2({
                                                placeholder: "Selectati tipul facturii",
                                                width: "100%",
                                                minimumResultsForSearch: Infinity
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('seriefactura', null, ['placeholder'=>'Serie Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('numarfactura', null, ['placeholder'=>'Numar Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            {!! Form::text('datafactura', null, ['id'=>'datafactura','placeholder'=>'Data Factura','class' => 'form-control']) !!}
                                            <script>$('#datafactura').datepicker({
                                                    format: 'yyyy/mm/dd',
                                                    startDate: '-3d'
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('valoarefactura_ftva', null, ['placeholder'=>'Valoare Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('valoare_tva', null, ['placeholder'=>'Valoare TVA','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('incasare', null, ['placeholder'=>'Incasare','class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>Produse Factura</h2>

                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <div class="col-md-1"><h3 class="box-title">Nr.Crt.</h3></div>
                                <div class="col-md-7"><h3 class="box-title">Denumire Produs</h4></div>
                                <div class="col-md-1"><h3 class="box-title">Cant.</h3></div>
                                <div class="col-md-1"><h3 class="box-title">Pret</h3></div>
                                <div class="col-md-1"><h3 class="box-title">TVA</h3></div>
                                <div class="col-md-1"><h3 class="box-title"></h3></div>
                            </div>
                            <div class="box-body">
                                <div class="input_fields_wrap">

                                    @foreach($datefactura as $key=>$elemente)
                                    <div style="padding-bottom: 5px;" class="row">
                                        <div class="col-md-1 " id="nrcrt"><div class="form-control">{{$key+1}}</div></div>
                                        <div class="col-md-7"><input class="form-control" type="text" name="denprodus[]" value="{{$elemente->denumireprodus}}"></div>
                                        <div class="col-md-1"><input class="form-control" type="text" name="cantitate[]" value="{{$elemente->cantitateprodus}}"></div>
                                        <div class="col-md-1"><input class="form-control" type="text" name="pret[]" value="{{$elemente->valoareprodus}}"></div>
                                        <div class="col-md-1"><input class="form-control" type="text" name="tva[]" value="{{$elemente->cotatva}}"></div>
                                        <div class="col-md-1"><a href="{{asset('admin/facturi/edit/3/'.Crypt::encrypt($elemente->id))}}" class="btn btn-info btn-sm"><i class="fa fa-minus"></i></a></div>
                                    </div>
                                    @endforeach
                                </div>

                                <button class="add_field_button btn btn-info btn-sm"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
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

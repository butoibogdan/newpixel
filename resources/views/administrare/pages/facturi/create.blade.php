@extends('administrare.dashboard')

@section('facturi')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h2>Date Factura</h2>
                    {!! Form::open(['url' => 'admin/facturi']) !!}

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date client</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::select('idclient',[''=>'']+$lista, null, ['onchange'=>'dateclient()','id'=>'select_client','class' => 'form-control']) !!}
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
                                        {!! Form::select('tipfactura',[''=>'','0'=>'Factura Proforma','1'=>'Factura Fiscala'], null, ['onchange'=>'seriefact()','id'=>'select_tipfactura','class' => 'form-control']) !!}
                                        <script>
                                            $("#select_tipfactura").select2({
                                                placeholder: "Selectati tipul facturii",
                                                width: "100%",
                                                minimumResultsForSearch: Infinity
                                            });
                                        </script>
                                        <div id='seriefactura'></div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::select('seriefactura',[''=>''],null, ['onchange'=>'numarff()','id'=>'serieff','placeholder'=>'Serie Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('numarfactura', null, ['id'=>'numarfactura','placeholder'=>'Numar Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            {!! Form::text('datafactura',null,['id'=>'datafactura','placeholder'=>'Data Factura','class' => 'form-control']) !!}
                                            <div id="dataselect"></div>
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
                    @include('administrare.pages.facturi.invoicetpl')
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

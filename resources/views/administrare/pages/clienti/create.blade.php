@extends('administrare.dashboard')

@section('clienti')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Adaugare -  Clienti</h1>
                    <hr/>
                    {!! Form::open(['url' => 'admin/clienti']) !!}
                    <div class="form-group">
                        {!! Form::label('tipclient', 'Tipclient: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::select('tipclient',[''=>'',1=>'persoana fizica',0=>'persoana juridica'], null, ['onchange'=>'selectareclient()','class' => 'form-control', 'id'=>'selectarecl']) !!}
                    </div>
                    <script>
                            $("#selectarecl").select2({
                                placeholder: "Selectati Clientul",
                                width: "100%",
                                minimumResultsForSearch: Infinity
                            });
                        </script>
                    <div id="formular"></div>

                    <div class="form-group">
                    {!! Form::submit('Selectati tipul clientului', ['disabled'=>'disabled','class' => 'btn btn-primary form-control','id'=>'buton']) !!}
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

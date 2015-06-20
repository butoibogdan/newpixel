@extends('administrare.dashboard_body')

@section('oferte')

    <h1>Edit Ofertestatice</h1>
    <hr/>

    {!! Form::model($ofertestatice, ['method' => 'PATCH', 'action' => ['AdminController\Pages\OfertestaticeController@update', $ofertestatice->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('HotelID', 'Hotelid: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('HotelID', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('DetaliiScurte', 'Detaliiscurte: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::textarea('DetaliiScurte', null, ['class' => 'form-control','id'=>'editorck']) !!}
                            <script>CKEDITOR.replace('editorck');</script>
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('DetaliiComplete', 'Detaliicomplete: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('DetaliiComplete', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('ServiciiIncluse', 'Serviciiincluse: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('ServiciiIncluse', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('ExtraServicii', 'Extraservicii: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('ExtraServicii', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('DocOferta', 'Docoferta: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('DocOferta', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div><div class="form-group">
                        {!! Form::label('DataExpirare', 'Dataexpirare: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6"> 
                            {!! Form::text('DataExpirare', null, ['class' => 'form-control']) !!}
                        </div>    
                    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

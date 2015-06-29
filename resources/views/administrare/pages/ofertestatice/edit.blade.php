@extends('administrare.dashboard_body')

@section('oferte')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Edit Ofertestatice</h1>
                    <hr/>

                    {!! Form::model($ofertestatice, ['method' => 'PATCH', 'action' => ['AdminController\Pages\OfertestaticeController@update', $ofertestatice->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('HotelID', 'Hotelid: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('HotelID', null, ['class' => 'form-control']) !!}   
                    </div>
                    <div class="form-group">
                        {!! Form::label('DetaliiScurte', 'Detaliiscurte: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('DetaliiScurte', null, ['class' => 'form-control','id'=>'editorck']) !!}
                        <script>CKEDITOR.replace('editorck');</script>   
                    </div>
                    <div class="form-group">
                        {!! Form::label('DetaliiComplete', 'Detaliicomplete: ', ['class' => 'col-md-12 control-label']) !!} 
                        {!! Form::text('DetaliiComplete', null, ['class' => 'form-control']) !!}   
                    </div>
                    <div class="form-group">
                        {!! Form::label('ServiciiIncluse', 'Serviciiincluse: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('ServiciiIncluse', null, ['class' => 'form-control']) !!}   
                    </div>
                    <div class="form-group">
                        {!! Form::label('ExtraServicii', 'Extraservicii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('ExtraServicii', null, ['class' => 'form-control']) !!}   
                    </div>
                    <div class="form-group">
                        {!! Form::label('DocOferta', 'Docoferta: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('DocOferta', null, ['class' => 'form-control']) !!}  
                    </div>
                    <div class="form-group">
                        {!! Form::label('DataExpirare', 'Dataexpirare: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('DataExpirare', null, ['class' => 'form-control']) !!}    
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

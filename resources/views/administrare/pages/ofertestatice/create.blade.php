@extends('administrare.dashboard_body')

@section('oferte')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Create New Ofertestatice</h1>
                    <hr/>

                    {!! Form::open(['files'=>true,'url' => 'admin/oferte']) !!}

                    <div class="form-group">
                        {!! Form::label('HotelID', 'Hotelid: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::select('HotelID',[''=>'']+$hoteluri,null, ['id'=>'select_hotel','class' => 'form-control']) !!}   
                        <script>
                            $("#select_hotel").select2({
                                placeholder: "Selectati Hotelul",
                                width: "100%"
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        {!! Form::label('DetaliiScurte', 'Detaliiscurte: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('DetaliiScurte', null, ['class' => 'form-control','id'=>'editorck']) !!}
                        <script>CKEDITOR.replace('editorck');</script>
                    </div>
                    <div class="form-group">
                        {!! Form::label('DetaliiComplete', 'Detaliicomplete: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('DetaliiComplete', null, ['class' => 'form-control','id'=>'editorck1']) !!}   
                        <script>CKEDITOR.replace('editorck1');</script>
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
                        {!! Form::file('DocOferta[]',['multiple'=>true,'id'=>'docstatice','class'=>'file','data-show-upload'=>'false']) !!}
                        <script>
                        $('#docstatice').fileinput({
                            allowedFileExtensions:['pdf'],
                            msgInvalidFileExtension:'Doar documentele cu extensia .pdf sunt acceptate'
                        });
                        </script>
                    </div>
                    <div class="form-group">
                        {!! Form::label('DataExpirare', 'Dataexpirare: ', ['class' => 'col-md-12 control-label']) !!}
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            {!! Form::text('DataExpirare', null, ['id'=>'datepicker','class' => 'form-control']) !!}
                        </div>
                        <script>$('#datepicker').datepicker({
                                format: 'yyyy/mm/dd',
                                startDate: '-3d'
                            });
                        </script>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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

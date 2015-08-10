@extends('administrare.dashboard')

@section('docplata')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Adaugare -  Docplatum</h1>
                    <hr/>
                    {!! Form::open(['url' => 'admin/plata']) !!}
                    
                    <div class="form-group">
                        {!! Form::label('tipdoc', 'Tipdoc: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::select('tipdoc',[''=>'']+config('newpixel.tipuri_plati'),null,['onchange'=>'seriedocplata()','id'=>'select_plata','class' => 'form-control']) !!}
                        <script>
                            $("#select_plata").select2({
                                placeholder: "Tip document de plata",
                                width: "100%",
                                minimumResultsForSearch: Infinity
                            });
                        </script>
                        <div id="teste"></div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('idfacturi', 'Idfacturi: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idfacturi', $idfactura, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('serie', 'Serie: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('serie', null, ['id'=>'seriedoc','class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('numar', 'Numar: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar', null, ['id'=>'numar','class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('data', 'Data: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('data', null, ['disabled'=>'disabled','id'=>'data','class' => 'form-control']) !!}
                        <div id='dataselect'></div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('valoare', 'Valoare: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('valoare', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('observatii', 'Observatii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('observatii', null, ['class' => 'form-control','id'=>'editorck_observatii']) !!}
                        <script>CKEDITOR.replace('editorck_observatii');</script>
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

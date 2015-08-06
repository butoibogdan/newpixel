@extends({!!Config::newpixel('master_layouts')!!})

@section('%%crudName%%')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit Factproduse</h1>
                    <hr/>

                    {!! Form::model($factproduse, ['method' => 'PATCH', 'action' => ['{!!Config::newpixel('controller_link')!!}FactproduseController@update', $factproduse->id], 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('iddoc', 'Iddoc: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('iddoc', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('tipdoc', 'Tipdoc: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('tipdoc', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('idfacturi', 'Idfacturi: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idfacturi', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('serie', 'Serie: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('serie', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('numar', 'Numar: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('data', 'Data: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('data', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('valoare', 'Valoare: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('valoare', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('observatii', 'Observatii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('observatii', null, ['class' => 'form-control','id'=>'editorck_observatii']) !!}
                        <script>CKEDITOR.replace('editorck_observatii');</script>
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

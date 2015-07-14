@extends('administrare.dashboard_body')

@section('tari')
    <div class="content">

        <div class="box box-success">
            <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: tari </h3> </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Adauga tara</h4>
                        <hr/>
                    </div>

                    {!! Form::open(['url' => 'admin/tari', 'files'=>'true', 'class' => 'form-horizontal']) !!}

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('nume', 'Denumire', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::text('nume', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ContinentID', 'Continent', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::select('ContinentID',[''=>'']+$continente,null,['id'=>'select_tari','class' => 'form-control']) !!}</div>
                             <script>
                               $("#select_tari").select2({
                                    placeholder: "Alege continent",
                                    width: "100%"
                                });
                            </script>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Latitudine', 'Latitudine', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Longitudine', 'Longitudine', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::text('Longitudine', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('poza', 'Imagine:', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozatari','class'=>'file','data-show-upload'=>'false']) !!}</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        {!! Form::label('descriere', 'Informatii complete') !!}
                        {!! Form::textarea('descriere', null, ['id'=>'editorck']) !!}
                        <script> CKEDITOR.replace('editorck'); </script>
                    </div>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-2 col-xs-offset-8">{!! Form::submit('Adauga', ['class' => 'btn btn-block btn-success btn-sm']) !!}</div>
                        <div class="col-md-2"><a href = "{{URL::previous()}}" class = 'btn btn-block btn-default btn-sm'>Inapoi la lista</a></div>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
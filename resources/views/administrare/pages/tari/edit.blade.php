@extends('administrare.dashboard')

@section('tari')
<div class="content">

    <div class="box box-primary">
        <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: tari :: {{$tari->nume}}</h3> </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Modifica tara</h4>
                    <hr/>

                    {!! Form::model($tari, ['method' => 'PATCH', 'files'=>true, 'action' => ['AdminController\Pages\TariController@update', $tari->id], 'class' => 'form-horizontal']) !!}

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('nume', 'Denumire', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::text('nume', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ContinentID', 'Continent', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::select('ContinentID',$continent_selectat+$continente,null,['id'=>'select_cont','class' => 'form-control']) !!}</div>
                        </div>
                        <script>
                            $("#select_cont").select2({
                                placeholder: "Alege continent",
                                width: "100%"
                            });
                        </script>
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
                            <div class="col-md-10">{!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozatariedit','class'=>'file','data-show-upload'=>'false']) !!}</div>
                        </div>
                    </div>

                    <ul style="height: 140px;display: inline-table;">
                        @foreach($img as $poza)
                        <li style="list-style-type: none;float: left;padding-right: 10px">
                            <div align='center'>
                                @if($poza->status==0)
                                <a href='{{URL::asset('admin/tari/setimgid/'.$idtara.'/'.$poza->id)}}'>Principala</a>
                                @else
                                <div align='center' style="color:red;font-weight: bold;">Primary</div>
                                @endif
                            </div>
                            {!! Html::image($poza->url,'Img',['width'=>'100','height'=>'100']) !!}
                            <br/>
                            <div align='center'>
                                <a href='{{URL::asset('admin/tari/delimgid/'.$poza->id)}}'>Sterge</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="col-md-12">
                        {!! Form::label('descriere', 'Informatii complete') !!}
                        {!! Form::textarea('descriere', null, ['id'=>'editorck']) !!}
                        <script> CKEDITOR.replace('editorck');</script>
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
        </div>
        <div class="box-footer">
            <div class="form-group">
                <div class="col-md-2 col-xs-offset-8">{!! Form::submit('Modifica', ['class' => 'btn btn-block btn-primary btn-sm']) !!}</div>
                <div class="col-md-2"><a href = "{{URL::previous()}}" class = 'btn btn-block btn-default btn-sm'>Inapoi la lista</a></div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
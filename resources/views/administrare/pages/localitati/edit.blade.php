@extends('administrare.dashboard_body')

@section('localitati')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit localitati</h1>
                    <hr/>

                    {!! Form::model($localitati, ['method' => 'PATCH', 'action' => ['AdminController\Pages\LocalitatiController@update', $localitati->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('TaraID', 'Taraid: ') !!}
                        {!! Form::text('TaraID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('RegiuneID', 'Regiuneid: ') !!}
                        {!! Form::text('RegiuneID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('nume', 'Nume: ') !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('tip', 'Tip: ') !!}
                        {!! Form::text('tip', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('descriere', 'Descriere: ') !!}
                        {!! Form::textarea('descriere', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('poza', 'Poze: ') !!}
                        <ul style="height: 140px;display: inline-table;">
                            @foreach($img as $poza)
                            <li style="list-style-type: none;float: left;padding-right: 10px">
                                <div align='center'>
                                    @if($poza->status==0)
                                    <a href='{{URL::asset('admin/localitati/setimglocid/'.$idloc.'/'.$poza->id)}}'>Set</a>
                                    @else
                                    <div align='center' style="color:red;font-weight: bold;">Primary</div>
                                    @endif
                                </div>
                                {!! Html::image($poza->url,'Img',['width'=>'100','height'=>'100']) !!}
                                <br/>
                                <div align='center'>
                                    <a href='{{URL::asset('admin/localitati/delimglocid/'.$poza->id)}}'>Delete</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">
                        {!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozalocalitatiedit','class'=>'file','data-show-upload'=>'false']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Longitudine', 'Longitudine: ') !!}
                        {!! Form::text('Longitudine', null, ['class' => 'form-control']) !!}
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
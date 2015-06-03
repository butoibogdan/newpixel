@extends('administrare.dashboard_body')

@section('hoteluri')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit hoteluri</h1>
                    <hr/>

                    {!! Form::model($hoteluri, ['method' => 'PATCH', 'action' => ['AdminController\Pages\HoteluriController@update', $hoteluri->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('TaraID', 'Taraid: ') !!}
                        {!! Form::text('TaraID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('RegiuneID', 'Regiuneid: ') !!}
                        {!! Form::text('RegiuneID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('LocalitateID', 'Localitateid: ') !!}
                        {!! Form::text('LocalitateID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('nume', 'Nume: ') !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('stele', 'Stele: ') !!}
                        {!! Form::text('stele', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('facilitati', 'Facilitati: ') !!}
                        {!! Form::text('facilitati', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('detalii_complete', 'Detalii Complete: ') !!}
                        {!! Form::textarea('detalii_complete', null, ['class' => 'form-control','id'=>'editorck']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('poza', 'Poze: ') !!}
                        <ul style="height: 140px;display: inline-table;">
                            @foreach($img as $poza)
                            <li style="list-style-type: none;float: left;padding-right: 10px">
                                <div align='center'>
                                    @if($poza->status==0)
                                    <a href='{{URL::asset('admin/setimghotelid/'.$idloc.'/'.$poza->id)}}'>Set</a>
                                    @else
                                    <div align='center' style="color:red;font-weight: bold;">Primary</div>
                                    @endif
                                </div>
                                {!! Html::image($poza->url,'Img',['width'=>'100','height'=>'100']) !!}
                                <br/>
                                <div align='center'>
                                    <a href='{{URL::asset('admin/delimghotelid/'.$poza->id)}}'>Delete</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">
                        {!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozahoteledit','class'=>'file','data-show-upload'=>'false']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('Longitutide', 'Longitutide: ') !!}
                        {!! Form::text('Longitutide', null, ['class' => 'form-control']) !!}
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
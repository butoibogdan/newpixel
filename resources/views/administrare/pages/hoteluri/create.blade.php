@extends('administrare.dashboard_body')

@section('hoteluri')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Create a new hoteluri</h1>
                    <hr/>

                    {!! Form::open(['url' => 'admin/hoteluri','files'=>'true']) !!}

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
                        {!! Form::label('tip', 'Tip: ') !!}
                        {!! Form::text('tip', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group"> 
                        {!! Form::label('facilitati','Facilitati: ') !!}
                        {!! Form::select('facilitati[]', $facilitati, null, ['multiple'=>'multiple','class' => 'form-control','id'=>'selectare']) !!}
                        <script>
                            $("#selectare").chosen({
                                disable_search_threshold: 10,
                                no_results_text: "Nu s-au gasit informatii !",
                                placeholder_text_multiple: "Selectati facilitatile din lista",
                                width: "100%"
                            });
                        </script>
                    </div><div class="form-group">
                        {!! Form::label('detalii_complete', 'Detalii Complete: ') !!}
                        {!! Form::textarea('detalii_complete', null, ['class' => 'form-control','id'=>'editorck']) !!}
                        <script>CKEDITOR.replace('editorck');</script>
                    </div>
                    <div class="form-group">
                        {!!Form::label('poza', 'Poza: ')!!}
                        {!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozahoteluri','class'=>'file','data-show-upload'=>'false']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('Longitutide', 'Longitutide: ') !!}
                        {!! Form::text('Longitutide', null, ['class' => 'form-control']) !!}
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
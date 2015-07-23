@extends('administrare.dashboard')

@section('facturi')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h2>Date Factura</h2>
                    {!! Form::open(['id'=>'facturi','url' => 'admin/facturi']) !!}

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date client</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::select('idclient',[''=>'']+$lista, null, ['onchange'=>'dateclient()','id'=>'select_client','class' => 'form-control']) !!}
                                        <script>
                                            $("#select_client").select2({
                                                placeholder: "Selectati Clientul",
                                                width: "100%"
                                            });
                                        </script>
                                    </div>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date Factura</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::select('tipfactura',[''=>'','0'=>'Factura Proforma','1'=>'Factura Fiscala'], null, ['onchange'=>'seriefact()','id'=>'select_tipfactura','class' => 'form-control']) !!}
                                        <script>
                                            $("#select_tipfactura").select2({
                                                placeholder: "Selectati tipul facturii",
                                                width: "100%",
                                                minimumResultsForSearch: Infinity
                                            });
                                        </script>
                                        <div id='seriefactura'></div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::select('seriefactura',[''=>''],null, ['onchange'=>'numarff()','id'=>'serieff','placeholder'=>'Serie Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('numarfactura', null, ['readonly','id'=>'numarfactura','placeholder'=>'Numar Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            {!! Form::text('datafactura',null,['disabled'=>'disabled','id'=>'datafactura','placeholder'=>'Data Factura','class' => 'form-control']) !!}
                                            <div id="dataselect"></div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        {!! Form::text('incasare', null, ['placeholder'=>'Incasare','class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('administrare.pages.facturi.invoicetpl')

                    <div class="form-group">
                        {!! Form::text('valoarefactura_ftva', null, ['id'=>'valfaratva','placeholder'=>'Valoare Factura','class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('valoare_tva',null, ['id'=>'totaltva','placeholder'=>'Valoare TVA','class' => 'form-control']) !!}
                    </div>

                    <script>

                        $('#facturi').delegate('.pretftva', 'change', function ()
                        {
                            var $summands = $('#facturi').find('.pretftva');
                            var sum = 0;
                            $summands.each(function ()
                            {
                                var value = Number($(this).val());
                                if (!isNaN(value))
                                    sum += value;
                            });

                            $('#valfaratva').val(sum);
                        });

                        $('#facturi').delegate('.tva', 'change', function () {
                            var $summands = $('#facturi').find('.tva');
                            var sum = 0;
                            $summands.each(function () {
                                var value = Number($(this).val());
                                if (!isNaN(value))
                                    sum += value * $('#pretftva').val();
                            });

                            $('#totaltva').val(sum);
                            $('#totaltva').number(true, 2);

                        });

                        $(document).ready(function () {
                            var max_fields = 10; //maximum input boxes allowed
                            var wrapper = $(".input_fields_wrap"); //Fields wrapper
                            var add_button = $(".add_field_button"); //Add button ID
                            var x = 1; //initlal text box count
                            var nr = $(".input_fields_wrap #nrcrt").length;
                            $(add_button).click(function (e) { //on add input button click
                                e.preventDefault();
                                if (x < max_fields) { //max input box allowed
                                    x++; //text box increment 
                                    var count = nr + x - 1;
                                    $(wrapper).append('\
                                                        <div id="sterge" style="padding-bottom: 5px;" class="row">\n\
                                                            <div style="padding-right:0;" class="col-md-1">\n\
                                                                <div id="nrcrt" class="form-control">' + count + '</div>\n\
                                                            </div>\n\
                                                            <div style="padding-right:0;" class="col-md-7">\n\
                                                                <input class="form-control" type="text" name="denprodus[]">\n\
                                                            </div>\n\
                                                            <div style="padding-right:0;" class="col-md-1">\n\
                                                                <input class="form-control" type="text" name="cantitate[]">\n\
                                                            </div>\n\
                                                            <div style="padding-right:0;" class="col-md-1">\n\
                                                                <input class="form-control pretftva" type="text" name="pret[]">\n\
                                                            </div>\n\
                                                            <div style="padding-right:0;" class="col-md-1">\n\
                                                            {!! Form::select("tva[]",config("newpixel.valori_tva"), null, ["id"=>"pretftva","class" => "form-control tva"]) !!} \n\
                                                            </div>\n\
                                                            <div style="padding-right:0;" class="col-md-1">\n\
                                                            <a href="#" class="remove_field btn btn-info btn-sm"><i class="fa fa-minus"></i></a>\n\
                                                            </div>\n\
                                                        </div>\n\
                                                      '); //add input box     
                                }
                            });

                            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                                e.preventDefault();
                                $('#sterge').remove();
                                x--;
                            })
                        });
                    </script>

                    <br/><br/>
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

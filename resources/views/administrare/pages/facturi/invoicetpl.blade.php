
<h2>Produse Factura</h2>

<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">  
            <div class="col-md-1"><h3 class="box-title">Nr.Crt.</h3></div>
            <div class="col-md-7"><h3 class="box-title">Denumire Produs</h4></div>
            <div class="col-md-1"><h3 class="box-title">Cant.</h3></div>
            <div class="col-md-1"><h3 class="box-title">Pret</h3></div>
            <div class="col-md-1"><h3 class="box-title">TVA</h3></div>
            <div class="col-md-1"><h3 class="box-title"></h3></div>
        </div>
        <div class="box-body">
            <div class="input_fields_wrap">
                <div style="padding-bottom: 5px;" class="row">
                    <div style="padding-right:0;" class="col-md-1" id="nrcrt"><div class="form-control">1</div></div>
                    <div style="padding-right:0;" class="col-md-7"><input class="form-control" type="text" name="denprodus[]"></div>
                    <div style="padding-right:0;" class="col-md-1"><input class="form-control" type="text" name="cantitate[]"></div>
                    <div style="padding-right:0;" class="col-md-1"><input id="pretftva" class="form-control pretftva" type="text" name="pret[]"></div>
                    <div style="padding-right:0;" class="col-md-1">
                        {!! Form::select("tva[]",config("newpixel.valori_tva"), null, ["id"=>"tva","class" => "form-control tva"]) !!}                        
                    </div>     
                    <div style="padding-right:0;" class="col-md-1"></div>
                </div>
            </div>
            <button class="add_field_button btn btn-info btn-sm"><i class="fa fa-plus"></i></button>
        </div>
    </div>
</div>







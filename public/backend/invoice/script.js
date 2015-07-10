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
            var count=nr+x-1;
            $(wrapper).append('<div id="sterge" style="padding-bottom: 5px;" class="row"><div class="col-md-1"><div id="nrcrt" class="form-control">' + count + '</div></div><div class="col-md-7"><input class="form-control" type="text" name="denprodus[]"></div><div class="col-md-1"><input class="form-control" type="text" name="cantitate[]"></div><div class="col-md-1"><input class="form-control" type="text" name="pret[]"></div><div class="col-md-1"><input class="form-control" type="text" name="tva[]"></div><div class="col-md-1"><a href="#" class="remove_field btn btn-info btn-sm"><i class="fa fa-minus"></i></a></div></div>'); //add input box     
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $('#sterge').remove();
        x--;
    })
});
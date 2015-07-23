
$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap_copii"); //Fields wrapper
    var add_button = $(".add_field_button_copii"); //Add button ID
    var x = 1; //initlal text box count
    var nr = $(".input_fields_wrap #nrcrt").length;

    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment 
            var count = nr + x - 1;
            $(wrapper).append(
                    '<div id="sterge_copii" style="margin-top: 5px;" class="row">\n\
                            <div class="col-md-5 ">\n\
                                <input placeholder="Nume copil" type="text" name="copii[]" class="form-control">\n\
                            </div>\n\
                        <div class="col-md-4 ">\n\
                            <div class="input-group">\n\
                                <div class="input-group-addon">\n\
                                    <i class="fa fa-calendar"></i>\n\
                                </div>\n\
                                <input placeholder="Data nasterii"  onchange="schimba()" type="text" id="datanasterii' + count + '" name="datanasteriicopii[]" class="form-control">\n\
                            </div>\n\
                        </div>\n\
                        <div class="col-md-2 ">\n\
                                <input placeholder="Varsta" type="text" class="form-control" id="varsta' + count + '">\n\
                        </div>\n\
                        <div class="col-md-1 ">\n\
                            <a href="#" class="remove_field_copii btn btn-info btn-sm">\n\
                                <i class="fa fa-minus"></i>\n\
                            </a>\n\
                        </div>\n\
                        </div>\n\
                        <script>$("#datanasterii' + count + '").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});</script>'
                    ); //add input box     
        }
    });

    $(wrapper).on("click", ".remove_field_copii", function (e) { //user click on remove text
        e.preventDefault();
        $('#sterge_copii').remove();
        x--;
    })
});


$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap_adulti"); //Fields wrapper
    var add_button = $(".add_field_button_adulti"); //Add button ID
    var x = 1; //initlal text box count
    var nr = $(".input_fields_wrap #nrcrt").length;
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment 
            var count = nr + x - 1;
            $(wrapper).append('<div id="sterge_adult" style="margin-top: 5px;" class="row"><div class="col-md-11 "><input type="text" name="adulti[]" class="form-control"></div><div class="col-md-1 "><a href="#" class="remove_field_adult btn btn-info btn-sm"><i class="fa fa-minus"></i></a></div></div>'); //add input box     
        }
    });

    $(wrapper).on("click", ".remove_field_adult", function (e) { //user click on remove text
        e.preventDefault();
        $('#sterge_adult').remove();
        x--;
    })
});



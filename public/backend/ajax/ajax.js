/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function selectareloc() {

    $.ajax({
        type: 'POST',
        url: "create/localitati",
        data: {'tari': $('select[name=TaraID]').val(), '_token': $('input[name=_token]').val()},
        success: function (res) {
            $('#optionloc').html(res);
        }
    });

    $.ajax({
        type: 'POST',
        url: "create/reg",
        data: {'tari': $('select[name=TaraID]').val(), '_token': $('input[name=_token]').val()},
        success: function (result) {
            $('#optionreg').val(result);
        }
    });
}

function selectareclient() {

    $.ajax({
        type: 'POST',
        url: "create/client",
        data: {'selectareclienti': $('select[name=tipclient]').val(), '_token': $('input[name=_token]').val()},
        success: function (result) {
            $('#formular').html(result);
            $('#buton').removeAttr('disabled');
            $('#buton').val('Adauga client');
        }
    });

}

function dateclient() {

    $.ajax({
        type: 'POST',
        url: "create/date_client",
        data: {'infoclienti': $('select[name=idclient]').val(), '_token': $('input[name=_token]').val()},
        success: function (r) {
            $('#result').html(r);
        }
    });

}

function seriefact() {

    $.ajax({
        type: 'POST',
        url: "create/serieff",
        data: {'selectareff': $('select[name=tipfactura]').val(), '_token': $('input[name=_token]').val()},
        success: function (result) {
            $('#serieff').html(result);
        }
    });

}

function numarff() {

    $.ajax({
        type: 'POST',
        url: "create/numarff",
        data: {'numff': $('#serieff').val(), '_token': $('input[name=_token]').val()},
        success: function (result) {
            $('#numarfactura').val(result);
        }
    });

    $.ajax({
        type: 'POST',
        url: "create/datamax",
        data: {'nrff': $('#serieff').val(), '_token': $('input[name=_token]').val()},
        success: function (result) {
            $('#datafactura').val(result);
            $('#datafactura').removeAttr('disabled');
            $('#dataselect').append('<script>$("#datafactura").datepicker({format: "yyyy-mm-dd",autoclose: true, startDate:' + '"' + result + '"' + '});</script>');
        }
    });
}


function seriedocplata() {

    $.ajax({
        type: 'POST',
        url: "create/serie",
        data: {'selectaredoc': $('select[name=tipdoc]').val(), '_token': $('input[name=_token]').val()},
        dataType: "json",
        success: function (result) {
            $('#seriedoc').val(result.value1);
            $('#numar').val(result.value2);
            $('#data').val(result.value3);
            $('#data').removeAttr('disabled');
            $('#dataselect').append('<script>$("#data").datepicker({format: "yyyy-mm-dd",autoclose: true, startDate:' + '"' + result.value3 + '"' + '});</script>');
        }
    });

}


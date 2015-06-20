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

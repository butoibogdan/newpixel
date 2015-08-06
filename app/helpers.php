<?php

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Facturis;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Clientis;
use App\Facturiproduses;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Input;
use App\Vouchers;

function voucheremis($id) {
    $voucher = Vouchers::where('idfactura', $id)->lists('id');
    foreach ($voucher as $vouchers) {
        return $vouchers;
    }
}

function numarvoucher($id) {
    $voucher = Vouchers::where('idfactura', $id)->lists('numar');
    foreach ($voucher as $vouchers) {
        return $vouchers;
    }
}

function statusfactura($id) {
    $factura = Facturis::where('id', $id)->lists('tipfactura');
    foreach ($factura as $fact) {
        return $fact;
    }
}

function dateincasare($id, $doc) {
    $factura = Facturis::where('id', $id)->lists('incasare');
    foreach ($factura as $fact) {
        $val=explode("|",$fact);
        if ($doc == "plata") {
            return $val[0];
        } else
        if ($doc == "nrdoc") {
            return $val[1];
        }
    }
}

function procentplata($id){
    $incasare = Facturis::where('id', $id)->get();
    foreach ($incasare as $fact) {
        $val=explode("|",$fact->incasare);
      
            return number_format((-1)*(1-($fact->valoarefactura_ftva+$fact->valoare_tva)/($fact->valoarefactura_ftva+$fact->valoare_tva+$val[0]))*100,2);
    }
}


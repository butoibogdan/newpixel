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

<?php

namespace App\Http\Controllers\AdminController\Pages;

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
use App\Numeredocumentes;

class FacturiController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $facturis = Facturis::latest()->get();
        return view('administrare.pages.facturi.index', compact('facturis'));
    }

    public function getvoucher($idfact) {
        return Vouchers::where('idfactura', $idfact)->lists('id');
    }

    /*
     * tip client 1 pentru PF 0 pentru PJ
     */

    public function dateclient(Request $r) {
        $val = Clientis::where('id', $r->infoclienti)->get();
        if ($val[0]->tipclient == 1) {
            return view('administrare.pages.facturi.pf')->with('dateclient', $val);
        } else
        if ($val[0]->tipclient == 0) {
            return view('administrare.pages.facturi.pj')->with('dateclient', $val);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function serieff(Request $request) {
        $numarmaxfact = Facturis::max('numarfactura');
        $serii = Numeredocumentes::where('tipdocument', $request->selectareff)->get();
        echo '<option value=""></option>';
        foreach ($serii as $serie) {
            if ($numarmaxfact == Null) {
                echo '<option value="' . $serie->seriedocument . '">' . $serie->seriedocument . '</option>';
            } else
            if ($numarmaxfact != Null) {
                echo '<option value="' . $serie->seriedocument . '">' . $serie->seriedocument . '</option>';
            } else
            if ($numarmaxfact == $serie->numar_max) {
                return NULL;
            }
        }
    }

    public function numarff(Request $request) {
        $numarmaxfact = Facturis::where('seriefactura', $request->numff)->max('numarfactura');
        $serii = Numeredocumentes::where('seriedocument', $request->numff)->get();
        foreach ($serii as $serie) {
            if ($numarmaxfact == Null) {
                echo $serie->numar_min;
            } else
            if ($numarmaxfact != Null) {
                echo $numarmaxfact + 1;
            } else
            if ($numarmaxfact == $serie->numar_max) {
                return NULL;
            }
        }
    }

    public function datamax(Request $request) {
        echo Facturis::where('seriefactura', $request->nrff)->max('datafactura');
    }

    public function create() {
        $clienti = Clientis::lists('nume', 'id');
        $numarff = Numeredocumentes::latest()->get();
        return view('administrare.pages.facturi.create')
                        ->with('lista', $clienti);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
//        $this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
//-Salvare in DB date factura-//

        $datefactura = [
            'idclient' => $request->idclient,
            'tipfactura' => $request->tipfactura,
            'seriefactura' => $request->seriefactura,
            'numarfactura' => $request->numarfactura,
            'datafactura' => $request->datafactura,
            'valoarefactura_ftva' => $request->valoarefactura_ftva,
            'valoaretva' => $request->valoaretva,
            'incasare' => $request->incasare,
        ];

        $inserfatct = Facturis::create($datefactura);

        $idfact = $inserfatct->id;
        $denumireprodus = $request->denprodus;
        $cantitateprodus = $request->cantitate;
        $valoareprodus = $request->pret;
        $cotatva = $request->tva;

        $contor = count($denumireprodus);

        for ($i = 0; $i < $contor; $i++) {

            $produsefactura = [
                'idfactura' => $idfact,
                'denumireprodus' => $denumireprodus[$i],
                'cantitateprodus' => $cantitateprodus[$i],
                'valoareprodus' => $valoareprodus[$i],
                'cotatva' => $cotatva[$i]
            ];

            Facturiproduses::create($produsefactura);
        }

        return redirect('admin/facturi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function generarepdf($id) {

        $fact = Facturis::where('id', $id)->get();
        $client = Clientis::where('id', $fact[0]->idclient)->get();
        $produse = Facturiproduses::where('idfactura', $id)->lists('denumireprodus');
        $cantitate = Facturiproduses::where('idfactura', $id)->lists('cantitateprodus');
        $valoare = Facturiproduses::where('idfactura', $id)->lists('valoareprodus');
        $tva = Facturiproduses::where('idfactura', $id)->lists('cotatva');

        $data = [
            'tipfactura' => $fact[0]->tipfactura,
            'seriefactura' => $fact[0]->seriefactura,
            'numarfactura' => $fact[0]->numarfactura,
            'datafactura' => $fact[0]->datafactura,
            'valoarefactura_ftva' => $fact[0]->valoarefactura_ftva,
            'valoare_tva' => $fact[0]->valoare_tva,
            'incasare' => $fact[0]->incasare,
            'client' => $client[0]->tipclient,
            'numeclient' => $client[0]->nume,
            'cui' => $client[0]->cui,
            'cif' => $client[0]->cif,
            'banca' => $client[0]->banca,
            'iban' => $client[0]->iban,
            'adresa' => $client[0]->adresa,
            'judet' => $client[0]->judet,
            'oras' => $client[0]->oras,
            'serieci' => $client[0]->serieci,
            'numarci' => $client[0]->numarci,
            'cnp' => $client[0]->cnp,
            'contor' => count($produse),
            'produse' => $produse,
            'cantitate' => $cantitate,
            'valoare' => $valoare,
            'tva' => $tva
        ];
        return \PDF::loadView('administrare.pages.facturi.invoicepdf', $data)
                        ->stream();
    }

    public function show($id) {
        $facturi = Facturis::findOrFail($id);
        return view('administrare.pages.facturi.show', compact('facturi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function showstorno($id) {

        $facturi = Facturis::findOrFail($id);
        $cl = explode(',', $facturi->idclient);
        $client = Clientis::where('id', $facturi->idclient)->lists('nume', 'id');
        $clienti = Clientis::whereNotIn('id', $cl)->lists('nume', 'id');
        $datefactura = Facturiproduses::where('idfactura', $id)->get();
        return view('administrare.pages.facturi.edit', compact('facturi'))
                        ->with('client', $client)
                        ->with('clienti', $clienti)
                        ->with('datefactura', $datefactura)
                        ->with('count', count($datefactura));
    }

    public function edit($id) {

        $facturi = Facturis::findOrFail($id);
        $cl = explode(',', $facturi->idclient);
        $client = Clientis::where('id', $facturi->idclient)->lists('nume', 'id');
        $clienti = Clientis::whereNotIn('id', $cl)->lists('nume', 'id');
        $datefactura = Facturiproduses::where('idfactura', $id)->get();
        return view('administrare.pages.facturi.edit', compact('facturi'))
                        ->with('client', $client)
                        ->with('clienti', $clienti)
                        ->with('datefactura', $datefactura)
                        ->with('count', count($datefactura));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $facturi = Facturis::findOrFail($id);
        $produse = Facturiproduses::where('idfactura', $id)->lists('id');

        $den = $request->denprodus;
        $cantitateprodus = $request->cantitate;
        $valoareprodus = $request->pret;
        $cotatva = $request->tva;

        $countprod = count($produse);

        $nrproduseform = count($den);

        for ($i = 0; $i < $nrproduseform; $i++) {
            $produsefactura = [
                'idfactura' => $id,
                'denumireprodus' => $den[$i],
                'cantitateprodus' => $cantitateprodus[$i],
                'valoareprodus' => $valoareprodus[$i],
                'cotatva' => $cotatva[$i]
            ];
            if ($i < $countprod) {
                Facturiproduses::updateOrCreate(['id' => $produse[$i]], $produsefactura);
            } else {
                Facturiproduses::create($produsefactura);
            }
        }
        $datefact = [
            'idclient' => $request->idclient,
            'tipfactura' => $request->tipfactura,
            'seriefactura' => $request->seriefactura,
            'numarfactura' => $request->numarfactura,
            'datafactura' => $request->datafactura,
            'valoarefacturaf_tva' => $request->valoarefacturaf_tva,
            'valoare_tva' => $request->valoare_tva,
            'incasare' => $request->incasare
        ];
        $facturi->update($datefact);
        Return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Facturis::destroy($id);
        return redirect('admin/facturi');
    }

    public function deleteprodus($id, $idp) {
        $idprodus = \Crypt::decrypt($idp);
        Facturiproduses::destroy($idprodus);
        Return \Redirect::back();
    }

}

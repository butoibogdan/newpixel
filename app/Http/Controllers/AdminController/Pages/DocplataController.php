<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Docplatas;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Facturis;

class DocplataController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $docplatas = Docplatas::latest()->get();
        return view('docplata.index', compact('docplatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $r) {
        if ($r->idfactura != NULL) {
            return view('administrare.pages.docplata.create')
                            ->with('idfactura', implode(",", array_keys($r->idfactura)));
        } else
            return redirect('admin/facturi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed
        $doc = Docplatas::create($request->all());
        $valoareincasare = $request->valoare;
        $vect = explode(",", $request->idfacturi);
        sort($vect);
        foreach ($vect as $factura) {
            if (Facturis::where('id', $factura)->pluck('incasare') == NULL) {
                $totalvaloare = Facturis::where('id', $factura)->pluck('valoarefactura_ftva') + Facturis::where('id', $factura)->pluck('valoare_tva');
                $valoareincasare = $valoareincasare - $totalvaloare;
                Facturis::where('id', $factura)->update(['incasare' => $valoareincasare . "|" . $doc->id]);
            } else {
                $valincasata = explode("|", Facturis::where('id', $factura)->pluck('incasare'));
                $totalvaloare = Facturis::where('id', $factura)->pluck('valoarefactura_ftva') + Facturis::where('id', $factura)->pluck('valoare_tva') + $valincasata[0];
                $valoareincasare = $valoareincasare - $totalvaloare;
                Facturis::where('id', $factura)->update(['incasare' => $valoareincasare . "|" . $doc->id . "/" . $valincasata[1]]);
            }
        }
        return redirect('admin/facturi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $docplatum = Docplatas::findOrFail($id);
        return view('docplata.show', compact('docplatum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $docplatum = Docplatas::findOrFail($id);
        return view('docplata.edit', compact('docplatum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $docplatum = Docplatas::findOrFail($id);
        $docplatum->update($request->all());
        return redirect('docplata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Docplatas::destroy($id);
        return redirect('docplata');
    }

}

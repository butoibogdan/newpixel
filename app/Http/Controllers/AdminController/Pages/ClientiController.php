<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Clientis;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientiController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $clientis = Clientis::latest()->get();
        return view('administrare.pages.clienti.index', compact('clientis'));
    }

    public function selectare(Request $request) {
        if ($request->selectareclienti == 1) {
            return view('administrare.pages.clienti.persfizice');
        } else

        if ($request->selectareclienti == 0) {
            return view('administrare.pages.clienti.persjuridice');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('administrare.pages.clienti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        Clientis::create($request->all());
        return redirect('admin/clienti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $clienti = Clientis::findOrFail($id);
        return view('administrare.pages.clienti.show', compact('clienti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $clienti = Clientis::findOrFail($id);
        return view('administrare.pages.clienti.edit', compact('clienti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $clienti = Clientis::findOrFail($id);
        $clienti->update($request->all());
        return redirect('admin/clienti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Clientis::destroy($id);
        return redirect('admin/clienti');
    }

}

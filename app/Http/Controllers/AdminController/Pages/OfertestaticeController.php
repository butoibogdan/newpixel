<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ofertestatices;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hoteluris;
use App\Documente;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class OfertestaticeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $ofertestatices = Ofertestatices::latest()->get();
        return view('administrare.pages.ofertestatice.index', compact('ofertestatices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $hotel = Hoteluris::lists('nume', 'id');
        return view('administrare.pages.ofertestatice.create')
                        ->with('hoteluri', $hotel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $valoriformular = array(
            'HotelID' => $request->HotelID,
            'DetaliiScurte'=>$request->DetaliiScurte,
            'DetaliiComplete'=>$request->DetaliiComplete,
            'ServiciiIncluse'=>$request->ServiciiIncluse,
            'ExtraServicii'=>$request->ExtraServicii,
            'DataExpirare'=>$request->DataExpirare,
        );

        $insertformular = Ofertestatices::create($valoriformular);
        $id = $insertformular->id;

        $files = Input::file('DocOferta');
        $file_count = count($files);
        $uploadcount = 0;

        foreach ($files as $file) {
            $rules = array('file' => 'required');
            $validare = Validator::make(array('file' => $file), $rules);

            if ($validare->passes()) {
                $destinationPath = 'oferte'; // upload path
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                $upload = $file->move($destinationPath, $fileName);

                $valoridoc = array(
                    'idOferta' => $id,
                    'url' => 'oferte/' . $fileName
                );

                Documente::create($valoridoc);

                $uploadcount++;
            }
        }

        if ($uploadcount == $file_count) {
            return redirect("admin/oferte");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $ofertestatice = Ofertestatices::findOrFail($id);
        return view('administrare.pages.ofertestatice.show', compact('ofertestatice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $ofertestatice = Ofertestatices::findOrFail($id);
        return view('administrare.pages.ofertestatice.edit', compact('ofertestatice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $ofertestatice = Ofertestatices::findOrFail($id);
        $ofertestatice->update($request->all());
        return redirect('oferte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Ofertestatices::destroy($id);
        return redirect('oferte');
    }

}

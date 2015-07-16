<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Localitatis;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Input;
use Validator;
use Session;
use Redirect;
use Intervention\Image\Facades\Image;
use App\LocalitatiImg;
use Illuminate\Support\Facades\File;
use App\Taris;
use App\Regiunis;

class LocalitatiController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $localitatis = Localitatis::latest()->get();
        return view('administrare.pages.localitati.index', compact('localitatis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $tara = Taris::lists('nume', 'id');
        $regiune = Regiunis::lists('nume', 'id');
        return view('administrare.pages.localitati.create')
                        ->with('regiuni', $regiune)
                        ->with('tari', $tara);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {

        $valoriformular = array(
            'TaraID' => $request->TaraID,
            'RegiuneID' => $request->RegiuneID,
            'nume' => $request->nume,
            'tip' => $request->tip,
            'descriere' => $request->descriere,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $insertformular = Localitatis::create($valoriformular);
        $id = $insertformular->id;

        $files = Input::file('poza');
        $file_count = count($files);
        $uploadcount = 0;


        foreach ($files as $file) {
            $rules = array('file' => 'required');
            $validare = Validator::make(array('file' => $file), $rules);

            if ($validare->passes()) {
                $destinationPath = 'images'; // upload path
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                $upload = $file->move($destinationPath, $fileName);

                Image::make(\URL::asset('images') . "/" . $fileName)->resize(\Config::get('newpixel.width'), \Config::get('newpixel.height'))->save('images/' . $fileName);

                $valoripoze = array(
                    'LocalitateID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                LocalitatiImg::create($valoripoze);

                $uploadcount++;
            }
        }

        if ($uploadcount == $file_count) {
            return redirect("admin/localitati");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $localitati = Localitatis::findOrFail($id);
        return view('administrare.pages.localitati.show', compact('localitati'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $segment_tara = \Request::segment(4);
        $localitati = Localitatis::findOrFail($id);
        $tara_select = Taris::where('id', $localitati->TaraID)->lists('nume', 'id');
        $tari = Taris::whereNotIn('id', explode(',', $localitati->TaraID))->lists('nume', 'id');
        $regiune_select = Regiunis::where('id', $localitati->RegiuneID)->lists('nume', 'id');
        $regiuni = Regiunis::whereNotIn('id', explode(',', $localitati->RegiuneID))->lists('nume', 'id');
        $url = LocalitatiImg::where('LocalitateID', $id)->get();
        return view('administrare.pages.localitati.edit', compact('localitati'))
                        ->with('img', $url)
                        ->with('idloc', $segment_tara)
                        ->with('tara_select', $tara_select)
                        ->with('tari', $tari)
                        ->with('regiune_select', $regiune_select)
                        ->with('regiuni', $regiuni);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {

        if (Input::file('poza')[0] != Null) {

            $files = Input::file('poza');
            $file_count = count($files);
            $uploadcount = 0;

            foreach ($files as $file) {
                $destinationPath = 'images'; // upload path
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                $upload = $file->move($destinationPath, $fileName);

                Image::make(\URL::asset('images') . "/" . $fileName)->resize(\Config::get('newpixel.width'), \Config::get('newpixel.height'))->save('images/' . $fileName);

                $valoripoze = array(
                    'LocalitateID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                LocalitatiImg::create($valoripoze);

                $uploadcount++;
            }
        }
        $valoriformular = array(
            'TaraID' => $request->TaraID,
            'RegiuneID' => $request->RegiuneID,
            'nume' => $request->nume,
            'tip' => $request->tip,
            'descriere' => $request->descriere,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $localitati = Localitatis::findOrFail($id);
        $localitati->update($valoriformular);
        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {

        LocalitatiImg::DeleteImg($id);
        Localitatis::destroy($id);

        return redirect('admin/localitati');
    }

    public function deleteimg($id) {
        $url = LocalitatiImg::find($id);
        \File::delete($url->url);
        LocalitatiImg::destroy($id);
        return \Redirect::back();
    }

    public function status($idlocalitate, $id) {
        LocalitatiImg::where('LocalitateID', $idlocalitate)->update(['status' => 0]);
        LocalitatiImg::where('LocalitateId', $idlocalitate)->where('id', $id)->update(['status' => 1]);
        return \Redirect::back();
    }

}

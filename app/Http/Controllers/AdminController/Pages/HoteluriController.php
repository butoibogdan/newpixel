<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hoteluris;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Input;
use Validator;
use Session;
use Redirect;
use Intervention\Image\Facades\Image;
use App\HoteluriImg;
use Illuminate\Support\Facades\File;
use App\Facilitatis;
use App\Localitatis;
use App\Taris;
use App\Regiunis;

class HoteluriController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $hoteluris = Hoteluris::latest()->get();
        return view('administrare.pages.hoteluri.index', compact('hoteluris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function localitati(Request $id) {
        $localitati = Localitatis::where('TaraID', $id->tari)->get();
        foreach ($localitati as $loc) {
            echo "<option value=" . $loc['id'] . ">" . $loc['nume'] . "</option>";
        }
    }
    
    public function regiuni(Request $id) {
        $regiuni = Regiunis::where('TaraID', $id->tari)->get();
        foreach ($regiuni as $reg) {
            echo $reg['id'];
        }
    }

    public function create() {
        $tari = Taris::lists('nume', 'id');
        $facilitatihotel = Facilitatis::lists('facilitati', 'id');
        return view('administrare.pages.hoteluri.create')
                        ->with('facilitati', $facilitatihotel)
                        ->with('tara', $tari);
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
            'LocalitateID' => $request->LocalitateID,
            'nume' => $request->nume,
            'tip' => $request->tip,
            'stele' => $request->stele,
            'facilitati' => implode(",", $request->facilitati),
            'detalii_complete' => $request->detalii_complete,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $insertformular = Hoteluris::create($valoriformular);
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
                    'HotelID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                HoteluriImg::create($valoripoze);

                $uploadcount++;
            }
        }

        if ($uploadcount == $file_count) {
            return redirect("admin/hoteluri");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $hoteluri = Hoteluris::findOrFail($id);
        return view('administrare.pages.hoteluri.show', compact('hoteluri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {

        $segment_hotel = \Request::segment(4);
        $hoteluri = Hoteluris::findOrFail($id);
        $url = HoteluriImg::where('HotelID', $id)->get();
        $facilitatih = explode(",", $hoteluri->facilitati);
        $fachu = Facilitatis::find($facilitatih);
        $facunlisted = Facilitatis::whereNotIn('id', $facilitatih)->get();
        return view('administrare.pages.hoteluri.edit', compact('hoteluri'))
                        ->with('img', $url)
                        ->with('idhotel', $segment_hotel)
                        ->with('fac', $fachu)
                        ->with('facunlist', $facunlisted);
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
                $url=\URL::asset('images') . "/" . $fileName;
                Image::make($url)->save('images/' . $fileName);

                $valoripoze = array(
                    'HotelID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                HoteluriImg::create($valoripoze);

                $uploadcount++;
            }
        }
        $valoriformular = array(
            'TaraID' => $request->TaraID,
            'RegiuneID' => $request->RegiuneID,
            'LocalitateID' => $request->LocalitateID,
            'nume' => $request->nume,
            'tip' => $request->tip,
            'stele' => $request->stele,
            'facilitati' => implode(',', $request->facilitati),
            'detalii_complete' => $request->detalii_complete,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $tari = Hoteluris::findOrFail($id);
        $tari->update($valoriformular);
        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        HoteluriImg::DeleteImg($id);
        Hoteluris::destroy($id);
        return \Redirect::back();
    }

    public function deleteimg($id) {
        $url = HoteluriImg::find($id);
        \File::delete($url->url);
        HoteluriImg::destroy($id);
        return \Redirect::back();
    }

    public function status($idhotel, $id) {
        HoteluriImg::where('HotelID', $idhotel)->update(['status' => 0]);
        HoteluriImg::where('HotelId', $idhotel)->where('id', $id)->update(['status' => 1]);
        return \Redirect::back();
    }

}

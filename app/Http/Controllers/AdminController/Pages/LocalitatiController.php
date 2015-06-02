<?php namespace App\Http\Controllers\AdminController\Pages;

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
        return view('administrare.pages.localitati.create');
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
        $segment_tara = \Request::segment(3);
        $localitati = Localitatis::findOrFail($id);
        $url = LocalitatiImg::where('LocalitateID', $id)->get();
        return view('administrare.pages.localitati.edit', compact('localitati'))
                        ->with('img', $url)
                        ->with('idloc', $segment_tara);
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

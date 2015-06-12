<?php

namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Taris;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Input;
use Validator;
use Session;
use Redirect;
use Intervention\Image\Facades\Image;
use App\TariImg;
use Illuminate\Support\Facades\File;
use App\Continentes;

class TariController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $taris = Taris::latest()->get();
        return view('administrare.pages.tari.index', compact('taris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $cont= Continentes::lists('Denumire','id');
        return view('administrare.pages.tari.create')
                ->with('continente',$cont);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {


        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        //dd($request->all());

        $valoriformular = array(
            'ContinentID' => $request->ContinentID,
            'nume' => $request->nume,
            'descriere' => $request->descriere,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $insertformular = Taris::create($valoriformular);
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
                $url=\URL::asset('images') . "/" . $fileName;
                Image::make($url)->resize(\Config::get('newpixel.width'), \Config::get('newpixel.height'))->save('images/' . $fileName);

                $valoripoze = array(
                    'TaraID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                TariImg::create($valoripoze);

                $uploadcount++;
            }
        }

        if ($uploadcount == $file_count) {
            return redirect("admin/tari");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $tari = Taris::findOrFail($id);
        return view('administrare.pages.tari.show', compact('tari'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $segment_tara = \Request::segment(4);
        $tari = Taris::findOrFail($id);
        $url = TariImg::where('TaraID', $id)->get();
        return view('administrare.pages.tari.edit', compact('tari'))
                        ->with('img', $url)
                        ->with('idtara', $segment_tara);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.

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
                Image::make($url)->resize(\Config::get('newpixel.width'), \Config::get('newpixel.height'))->save('images/' . $fileName);

                $valoripoze = array(
                    'TaraID' => $id,
                    'status' => 0,
                    'url' => 'images/' . $fileName
                );

                TariImg::create($valoripoze);

                $uploadcount++;
            }
        }
        $valoriformular = array(
            'ContinentID' => $request->ContinentID,
            'nume' => $request->nume,
            'descriere' => $request->descriere,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );

        $tari = Taris::findOrFail($id);
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

        TariImg::DeleteImg($id);
        Taris::destroy($id);

        return redirect('admin/tari');
    }

    public function deleteimg($id) {
        $url = TariImg::find($id);
        \File::delete($url->url);
        TariImg::destroy($id);
        return \Redirect::back();
    }

    public function status($idtara, $id) {
        TariImg::where('TaraID', $idtara)->update(['status' => 0]);
        TariImg::where('TaraId', $idtara)->where('id', $id)->update(['status' => 1]);
        return \Redirect::back();
    }

}

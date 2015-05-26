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
        return view('administrare.pages.tari.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {

        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.

        $file = array('image' => Input::file('poza'));
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('tari')->withInput()->withErrors($validator);
        } else {
            if (Input::file('poza')->isValid()) {
                $destinationPath = 'images'; // upload path
                $extension = Input::file('poza')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                Input::file('poza')->move($destinationPath, $fileName);
                Image::make(\URL::asset('images') . "/" . $fileName)->resize(\Config::get('newpixel.width'), \Config::get('newpixel.height'))->save('images/' . $fileName);
            }
        }

        $valori = array(
            'ContinentID' => $request->ContinentID,
            'nume' => $request->nume,
            'descriere' => $request->descriere,
            'poza' => \URL::asset('images') . "/" . $fileName,
            'Latitudine' => $request->Latitudine,
            'Longitudine' => $request->Longitudine,
        );
//        dd($request->all());


        Taris::create($valori);
        return redirect('admin/tari');
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
        $tari = Taris::findOrFail($id);
        return view('administrare.pages.tari.edit', compact('tari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
        $tari = Taris::findOrFail($id);
        $tari->update($request->all());
        return redirect('admin/tari');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Taris::destroy($id);
        return redirect('admin/tari');
    }

}

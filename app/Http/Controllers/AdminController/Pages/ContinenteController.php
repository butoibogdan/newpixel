<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Continentes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContinenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$continentes = Continentes::latest()->get();
		return view('administrare.pages.continente.index', compact('continentes'));
                
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrare.pages.continente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Continentes::create($request->all());
		return redirect('admin/continente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$continente = Continentes::findOrFail($id);
		return view('administrare.pages.continente.show', compact('continente'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$continente = Continentes::findOrFail($id);
		return view('administrare.pages.continente.edit', compact('continente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$continente = Continentes::findOrFail($id);
		$continente->update($request->all());
		return redirect('admin/continente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Continentes::destroy($id);
		return redirect('admin/continente');
	}

}
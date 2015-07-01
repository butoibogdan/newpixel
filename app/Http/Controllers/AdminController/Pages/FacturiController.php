<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Facturis;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FacturiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facturis = Facturis::latest()->get();
		return view('administrare.pages.facturi.index', compact('facturis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrare.pages.facturi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Facturis::create($request->all());
		return redirect('admin/facturi');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$facturi = Facturis::findOrFail($id);
		return view('administrare.pages.facturi.show', compact('facturi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$facturi = Facturis::findOrFail($id);
		return view('administrare.pages.facturi.edit', compact('facturi'));
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
		$facturi = Facturis::findOrFail($id);
		$facturi->update($request->all());
		return redirect('admin/facturi');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Facturis::destroy($id);
		return redirect('admin/facturi');
	}

}
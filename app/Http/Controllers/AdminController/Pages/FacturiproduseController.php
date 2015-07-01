<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Facturiproduses;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FacturiproduseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facturiproduses = Facturiproduses::latest()->get();
		return view('administrare.pages.facturiproduse.index', compact('facturiproduses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrare.pages.facturiproduse.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Facturiproduses::create($request->all());
		return redirect('admin/facturiproduse');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$facturiproduse = Facturiproduses::findOrFail($id);
		return view('administrare.pages.facturiproduse.show', compact('facturiproduse'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$facturiproduse = Facturiproduses::findOrFail($id);
		return view('administrare.pages.facturiproduse.edit', compact('facturiproduse'));
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
		$facturiproduse = Facturiproduses::findOrFail($id);
		$facturiproduse->update($request->all());
		return redirect('admin/facturiproduse');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Facturiproduses::destroy($id);
		return redirect('admin/facturiproduse');
	}

}
<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Numeredocumentes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NumeredocumeteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$numerefacturis = Numeredocumentes::latest()->get();
		return view('administrare.pages.numardoc.index', compact('numerefacturis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrare.pages.numardoc.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Numeredocumentes::create($request->all());
		return redirect('admin/doc_number');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$numerefacturi = Numeredocumentes::findOrFail($id);
		return view('administrare.pages.numardoc.show', compact('numerefacturi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$numerefacturi = Numeredocumentes::findOrFail($id);
		return view('administrare.pages.numardoc.edit', compact('numerefacturi'));
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
		$numerefacturi = Numeredocumentes::findOrFail($id);
		$numerefacturi->update($request->all());
		return redirect('admin/doc_number');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Numeredocumetes::destroy($id);
		return redirect('admin/doc_number');
	}

}
<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Facilitatis;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FacilitatiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facilitatis = Facilitatis::latest()->get();
		return view('administrare.pages.facilitati.index', compact('facilitatis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrare.pages.facilitati.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Facilitatis::create($request->all());
		return redirect('admin/facilitati');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$facilitati = Facilitatis::findOrFail($id);
		return view('administrare.pages.facilitati.show', compact('facilitati'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$facilitati = Facilitatis::findOrFail($id);
		return view('administrare.pages.facilitati.edit', compact('facilitati'));
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
		$facilitati = Facilitatis::findOrFail($id);
		$facilitati->update($request->all());
		return redirect('admin/facilitati');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Facilitatis::destroy($id);
		return redirect('admin/facilitati');
	}

}
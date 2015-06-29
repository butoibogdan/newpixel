<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Clientipfs;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientipfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientipfs = Clientipfs::latest()->get();
		return view('clientipf.index', compact('clientipfs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clientipf.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Clientipfs::create($request->all());
		return redirect('clientipf');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$clientipf = Clientipfs::findOrFail($id);
		return view('clientipf.show', compact('clientipf'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clientipf = Clientipfs::findOrFail($id);
		return view('clientipf.edit', compact('clientipf'));
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
		$clientipf = Clientipfs::findOrFail($id);
		$clientipf->update($request->all());
		return redirect('clientipf');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clientipfs::destroy($id);
		return redirect('clientipf');
	}

}
<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Clientipjs;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientipjController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientipjs = Clientipjs::latest()->get();
		return view('clientipj.index', compact('clientipjs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clientipj.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Clientipjs::create($request->all());
		return redirect('clientipj');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$clientipj = Clientipjs::findOrFail($id);
		return view('clientipj.show', compact('clientipj'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clientipj = Clientipjs::findOrFail($id);
		return view('clientipj.edit', compact('clientipj'));
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
		$clientipj = Clientipjs::findOrFail($id);
		$clientipj->update($request->all());
		return redirect('clientipj');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clientipjs::destroy($id);
		return redirect('clientipj');
	}

}
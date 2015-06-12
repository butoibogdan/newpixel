<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Regiunis;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Taris;

class RegiuniController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regiunis = Regiunis::latest()->get();
		return view('administrare.pages.regiuni.index', compact('regiunis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
                $tara= Taris::lists('nume','id');
		return view('administrare.pages.regiuni.create')
                        ->with('tari',$tara);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Regiunis::create($request->all());
		return redirect('admin/regiuni');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$regiuni = Regiunis::findOrFail($id);
		return view('administrare.pages.regiuni.show', compact('regiuni'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$regiuni = Regiunis::findOrFail($id);
		return view('administrare.pages.regiuni.edit', compact('regiuni'));
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
		$regiuni = Regiunis::findOrFail($id);
		$regiuni->update($request->all());
		return redirect('admin/regiuni');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Regiunis::destroy($id);
		return redirect('admin/regiuni');
	}

}
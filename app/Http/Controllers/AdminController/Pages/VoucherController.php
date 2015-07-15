<?php namespace App\Http\Controllers\AdminController\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vouchers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Facturiproduses;

class VoucherController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vouchers = Vouchers::latest()->get();
		return view('administrare.pages.voucher.index', compact('vouchers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
            $datacurenta=Carbon::now()->format('Y/m/d');
            $produse=Facturiproduses::where('idfactura',$id)->get();
		return view('administrare.pages.voucher.create')
                        ->with('idfactura',$id)
                        ->with('produse',$produse)
                        ->with('datacurenta',$datacurenta);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Vouchers::create($request->all());
		return redirect('voucher');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$voucher = Vouchers::findOrFail($id);
		return view('administrare.pages.voucher.show', compact('voucher'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$voucher = Vouchers::findOrFail($id);
		return view('administrare.pages.voucher.edit', compact('voucher'));
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
		$voucher = Vouchers::findOrFail($id);
		$voucher->update($request->all());
		return redirect('voucher');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vouchers::destroy($id);
		return redirect('voucher');
	}

}
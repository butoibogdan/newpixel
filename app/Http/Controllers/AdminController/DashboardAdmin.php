<?php namespace App\Http\Controllers\AdminController;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class DashboardAdmin extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                if(\Session::get('name')){
                    $name=\session::get('name');
                    return \View::make('administrare.dashboard_firstpage')
                            ->with('nume',$name);
                } else {
                    return \Redirect::to('login');
                }
	}

}

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
                if(\Session::get('name') && \Auth::check()){
                    
                    return \View::make('administrare.dashboard_content');
                } else {
                    return \Redirect::to('login');
                }
	}

}

<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Illuminate\Support\Facades\Session;

class HomeAdmin extends Controller {

    public function index() {
        
    }

    public function getLogin() {
        return \View::make('administrare.auth.login');
    }

    public function postLogin() {
        $input = \Input::all();

        $rules = array(
            'email' => 'required',
            'password' => 'required'
        );

        $v = \Validator::make($input, $rules);
        if ($v) {
            $credentials = array(
                'email' => $input['email'],
                'password' => $input['password']
            );

            if (\Auth::attempt($credentials)) {
                $usertable=\Auth::user();
                \Session::put('uid',$usertable->id);
                \Session::put('name',$usertable->name);
                \Session::put('email',$usertable->email);
                return \Redirect::to('admin');
            } else {
                return \Redirect::to('login');
            }
        } else {
            return \Redirect::to('login')->withInput()->withErrors();
        }
    }

    public function getRegister() {
        return \View::make('administrare.auth.register');
    }

    public function postRegister() {
        $input = \Input::all();
        $rules = array(
            'username' => 'required|unique:users',
            'email' => 'required|uniqued:users'
        );

        $v = \Validator::make($input, $rules);
        if ($v) {

            $password = $input['password'];
            $password = \Hash::make($password);

            $user = new User;
            $user->name = $input['username'];
            $user->email = $input['email'];
            $user->password = $password;
            $user->save();

            return \Redirect::to('login');
        } else {
            return \Redirect::to('register')->withInput()->withErrors();
        }
    }

    public function logout() {
        \Auth::logout();
        \Session::flush();
        return \Redirect::to('login');
    }

}

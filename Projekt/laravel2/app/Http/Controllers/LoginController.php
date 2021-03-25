<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }
 
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/products';
 
    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;
 
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
 
        $this->username = $this->findUsername();
    }
 
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
 
    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
}

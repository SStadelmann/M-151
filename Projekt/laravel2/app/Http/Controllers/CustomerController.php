<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    use LoginTrait;

    public function login()
    {
        if ($this->checkLogin()) {
            return redirect('/products');
        }
        $request = request();
        if (
            !$request->email ||
            !$request->password
        ) {
            return view('login');
        } else {
            if ($this->loginUser($request->email, $request->password)) {
                return redirect('/products');
            } else {
                return view('login', ['hasFailed' => true]);
            }
        }
    }

    public function register()
    {
        if ($this->checkLogin()) {
            return redirect('/products');
        }
        $request = request();
        if (
            !$request->email ||
            !$request->password ||
            !$request->firstname ||
            !$request->lastname ||
            !$request->street ||
            !$request->zip ||
            !$request->city ||
            !$request->phone
        ) {
            return view('register');
        } else {
            if ($this->createUser($request) && $this->login($request->email, $request->password)) {
                return redirect('/products');
            } else {
                return view('register', ['hasFailed' => true]);
            }
        }
    }
}

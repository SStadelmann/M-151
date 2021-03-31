<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

trait LoginTrait
{
    public function checkLogin()
    {
        if (session()->get('userId')) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($props)
    {

        $user = new \App\Models\users;

        $user->email = $props->email;
        $user->password =  Hash::make($props->password);
        $user->first_name = $props->firstname;
        $user->last_name = $props->lastname;
        $user->street = $props->street;
        $user->city = $props->city;
        $user->zip = $props->zip;
        $user->phone = $props->phone;

        if ($user->save()) {
            $this->loginUser($props->email, $props->password);
            return true;
        } else {
            return false;
        }
    }

    public function loginUser($email, $password)
    {
        $user = \App\Models\users::all()->where('email', $email)->first();

        if (isset($user->password) && Hash::check($password, $user->password)) {
            session()->put('userId', $user->id);
            return true;
        } else {
            return false;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

trait LoginTrait
{
    public function checkLogin()
    {
        if (session()->get('customerId')) {
            return true;
        } else {
            return false;
        }
    }

    public function createcustomer($props)
    {

        $customer = new \App\Models\Customer;

        $customer->email = $props->email;
        $customer->password =  Hash::make($props->password);
        $customer->first_name = $props->firstname;
        $customer->last_name = $props->lastname;
        $customer->street = $props->street;
        $customer->city = $props->city;
        $customer->zip = $props->zip;
        $customer->phone = $props->phone;

        if ($customer->save()) {
            $this->logincustomer($props->email, $props->password);
            return true;
        } else {
            return false;
        }
    }

    public function logincustomer($email, $password)
    {
        $customer = \App\Models\customer::all()->where('email', $email)->first();

        if (isset($customer->password) && Hash::check($password, $customer->password)) {
            session()->put('customerId', $customer->id);
            return true;
        } else {
            return false;
        }
    }
}

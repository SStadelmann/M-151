<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    use LoginTrait;

    public function checkout()
    {
        $products = session()->get('basket');
        if ($this->checkLogin() && $products && count($products) > 0) {

            $totalPrice = 0;
            $totalAmount = 0;
            foreach ($products as $p) {
                $totalPrice += $p->price;
                $totalAmount++;
            }

            $user = \App\Models\users::find(session()->get('userId'));

            return view('checkout', [
                'products' => $products,
                'totalPrice' => $totalPrice,
                'totalAmount' => $totalAmount,
                'user' => $user
            ]);
        } else {
            return redirect('login');
        }
    }

    public function sendOrder()
    {
        if ($this->checkLogin() && session()->get('basket') && count(session()->get('basket'))) {
            $products = session()->get('basket');

            $order = new \App\Models\orders;
            $order->user_id = session()->get('userId');

            $totalPrice = 0;
            foreach ($products as $p) {
                $totalPrice += $p->price;
            }
            $order->price = $totalPrice;
            if ($order->save()) {
                foreach ($products as $p) {
                    $pDB = new \App\Models\order_items;
                    $pDB->amount = 1;
                    $pDB->product_id = $p->id;
                    $pDB->order_id = $order->id;
                    $pDB->price = $p->price;
                    $pDB->save();
                }
            }
            session()->put('basket', array());
        }

        return redirect('orders');
    }
}

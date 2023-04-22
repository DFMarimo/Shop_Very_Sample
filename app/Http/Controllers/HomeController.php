<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('users.home', compact('orders'));
    }

    public function profileView()
    {
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    public function profileForm(User $user)
    {
        if ($user == auth()->user()) {
            return view('users.edit', compact('user'));
        } else {
            return back();
        }
    }

    public function profileEdit(User $user, Request $request)
    {
        if ($user == auth()->user()) {
            $request->validate([
                'name' => ['required'],
                'email' => ['required']
            ]);

            if ($request->password) {
                $request->validate([
                    'password' => ['required', 'same:password_confirmation'],
                ]);

                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            return redirect(route('home.profile'));
        } else {
            return back();
        }
    }

    public function order(Order $order)
    {
        $products = $order->products;
        return view('users.order', compact('products'));
    }
}

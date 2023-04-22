<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::latest()->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect(route('orders.index'));
    }

    public function show(Order $order)
    {
        $products = $order->products;
        return view('admin.orders.show', compact('products'));
    }
}

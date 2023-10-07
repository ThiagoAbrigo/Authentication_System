<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::paginate();
        return view('order.index', compact('order'))->with('i', (request()->input('page', 1) -1) * $order->perPage());
    }

    public function create()
    {
        $order = new Order();
        $client = Client::pluck('name','id');
        return view('order.create', compact('order', 'client'));
    }

    public function store(Request $request)
    {
        request()->validate(Order::$rules);
        $order = Order::create($request->all());
        return redirect()->route('order.index')->with('success', 'Order created successfully');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $client = Client::pluck('name', 'id');
        return view('order.edit', compact('order', 'client'));
    }

    public function update(Request $request, Order $order)
    {
        request()->validate(Order::$rules);
        $order->update($request->all());
        return redirect()->route('order.index')->with('successs', 'Order update successfully');
    }

    public function destroy($id)
    {
        $order = Order::find($id)->delete();
        return redirect()->route('order.index')->with('success', 'Order deleted successfully');
    }
}

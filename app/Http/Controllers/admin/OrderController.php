<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\User;
use App\Models\ServiceReservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'serviceReservation'])->get();
        return view('admin.pages.orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        $serviceReservations = ServiceReservation::all();
        return view('admin.pages.orders.create', compact('users', 'serviceReservations'));
    }

    public function store(OrderStoreRequest $request)
    {
        $validatedData = $request->validated();
        $order = Order::create($validatedData);
        return redirect()->route('orders.index')->with('success', 'Order created successfully');
    }

    public function edit(Order $order)
    {
        $users = User::all();
        $serviceReservations = ServiceReservation::all();
        return view('admin.pages.orders.edit', compact('order', 'users', 'serviceReservations'));
    }

    public function update(OrderUpdateRequest $request, Order $order)
    {
        $validatedData = $request->validated();
        $order->update($validatedData);
        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    public function show(Order $order)
    {
        return view('admin.pages.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
}

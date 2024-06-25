<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ServiceReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        // Fetch all service reservations
        $serviceReservations = ServiceReservation::limit(5)->get();

        // Return the view with the fetched data
        return view('customer.pages.main_page', compact('serviceReservations'));
    }

    public function show_party($id)
    {
        // Fetch the service reservation by id
        $serviceReservation = ServiceReservation::findOrFail($id);

        // Return the view with the fetched data
        return view('customer.pages.show_party', compact('serviceReservation'));
    }

    public function show_order_form($id)
    {
        // Fetch the service reservation by id
        $serviceReservation = ServiceReservation::findOrFail($id);

        // Return the order form view
        return view('customer.pages.order_form', compact('serviceReservation'));
    }

    public function place_order(Request $request, $id)
    {
        $request->validate([
            'delivery_date' => 'required|date|after:today',
            'additional_details' => 'nullable|string',
        ]);

        $serviceReservation = ServiceReservation::findOrFail($id);

        Order::create([
            'user_id' => Auth::id() ?? null, // user_id can be null if not authenticated
            'service_reservation_id' => $serviceReservation->id,
            'price' => $serviceReservation->price,
            'delivery_date' => $request->delivery_date,
            'additional_details' => $request->additional_details,
        ]);
        return view('customer.pages.thankyou');
    }

    public function shop(Request $request)
    {
        $query = ServiceReservation::query();

        if ($request->has('sort_by')) {
            if ($request->sort_by == 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort_by == 'price_desc') {
                $query->orderBy('price', 'desc');
            }
        }

        $serviceReservations = $query->paginate(9);

        return view('customer.pages.shop', compact('serviceReservations'));
    }

    public function viewOrder()
    {
        // Assuming you have an Order model and orders relationship in your User model
        $user = Auth::user();
        $orders = $user->orders;

        return view('orders.view_order', compact('orders'));
    }
}

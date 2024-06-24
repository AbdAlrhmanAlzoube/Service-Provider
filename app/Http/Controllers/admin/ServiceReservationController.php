<?php

namespace App\Http\Controllers\admin;

use App\Models\ServiceReservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ServiceReservationStoreRequest;
use App\Http\Requests\ServiceReservationUpdateRequest;

class ServiceReservationController extends Controller
{
    public function index()
    {
        $serviceReservations = ServiceReservation::with('user')->get();

        return view('admin.pages.service_reservations.index', compact('serviceReservations'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.pages.service_reservations.create', compact('users'));
    }

    public function store(ServiceReservationStoreRequest $request)
    {
        $validatedData = $request->validated();

        // Upload picture if provided
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('pictures/service_reservations', 'public');
            $validatedData['picture'] = $picturePath;
        }

        $serviceReservation = ServiceReservation::create($validatedData);
        return redirect()->route('service-reservations.index')->with('success', 'Service Reservation created successfully');
    }

    public function edit(ServiceReservation $serviceReservation)
    {
        $users = User::all();
        return view('admin.pages.service_reservations.edit', compact('serviceReservation', 'users'));
    }

    public function update(ServiceReservationUpdateRequest $request, ServiceReservation $serviceReservation)
    {
        $validatedData = $request->validated();

        // Upload picture if provided
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('pictures/service_reservations', 'public');
            $validatedData['picture'] = $picturePath;
        }

        $serviceReservation->update($validatedData);
        return redirect()->route('service-reservations.index')->with('success', 'Service Reservation updated successfully');
    }

    public function show(ServiceReservation $serviceReservation)
    {
        return view('admin.pages.service_reservations.show', compact('serviceReservation'));
    }

    public function destroy(ServiceReservation $serviceReservation)
    {
        $serviceReservation->delete();
        return redirect()->route('service-reservations.index')->with('success', 'Service Reservation deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;

class CarRentalController extends Controller
{
    public function index()
    {
        $carRentals = CarRental::all();
        return view('car_rentals.index', compact('carRentals'));
    }

    public function create()
    {
        return view('car_rentals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'price_per_day' => 'required|numeric',
        ]);

        CarRental::create($request->all());
        return redirect()->route('car-rentals.index')->with('success', 'Car rental created successfully.');
    }

    public function show(CarRental $carRental)
    {
        return view('car_rentals.show', compact('carRental'));
    }

    public function edit(CarRental $carRental)
    {
        return view('car_rentals.edit', compact('carRental'));
    }

    public function update(Request $request, CarRental $carRental)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'price_per_day' => 'required|numeric',
        ]);

        $carRental->update($request->all());
        return redirect()->route('car-rentals.index')->with('success', 'Car rental updated successfully.');
    }

    public function destroy(CarRental $carRental)
    {
        $carRental->delete();
        return redirect()->route('car-rentals.index')->with('success', 'Car rental deleted successfully.');
    }
}
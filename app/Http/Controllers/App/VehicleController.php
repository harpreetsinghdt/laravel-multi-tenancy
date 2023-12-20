<?php

namespace App\Http\Controllers\App;

use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehicles = Vehicle::get();
        return view('app.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('app.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        //
        $validatedData = $request->validate([
           'miles'=>'required|string|max:255',
           'make'=>'required|string|max:255',
           'model'=>'required|string|max:255',
           'color'=>'required|string|max:255',
           
        ]);
        
        Vehicle::create($validatedData);
      
        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
        return view('app.vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        //
        $validatedData = $request->validate([
           'miles'=>'required|string|max:255',
           'make'=>'required|string|max:255',
           'model'=>'required|string|max:255',
           'color'=>'required|string|max:255',
           
        ]);
        
        $vehicle->update($validatedData);
        return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
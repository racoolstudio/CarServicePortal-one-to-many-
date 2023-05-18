<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('owner')->get();
        return view('home.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $owners = Owner::all();
       return view('Car.create',compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'car_model' =>'required|min:1|max:40',
            'car_name' =>'required|min:1|max:50',
            'owner_id' =>'required|numeric'
        ]);

        if($validator->fails()){
    
            toastr()->error('Oops! Something went wrong!');
            
            return redirect()->route('car.create')->withErrors($validator)->withInput();

        }
        $ownerId = $request->input('owner_id');
    
        // Check if the owner already has a car
        $existingCar = Car::where('owner_id', $ownerId)->first();
        if ($existingCar) {
            toastr()->error('The owner already has a car!');
            return redirect()->route('car.create')->withInput();
        }
    
        $car = new Car();
        $car->car_name = $request->input('car_name');
        $car->car_model = $request->input('car_model');
        $car->owner_id = $ownerId;
        $car->save();
        toastr()->success('Successfully Created !');
        return redirect()->route('car.show', $car->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('Car.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $owners = Owner::all();
        $car = Car::findOrFail($id);
      
        return view('Car.edit',compact('car','owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'car_model' =>'required|min:1|max:40',
            'car_name' =>'required|min:1|max:50',
            'owner_id' =>'required|numeric'
        ]);

        if($validator->fails()){
            toastr()->error('Oops! Something went wrong!');
            return redirect()->route('car.edit',['car'=>Car::findOrFail($id)])->withErrors($validator)->withInput();
        }

        $ownerId = $request->input('owner_id');
    
        // Check if the owner already has a car
        $existingCar = Car::where('owner_id', $ownerId)->first();
        if ($existingCar) {
            toastr()->error('The owner already has a car!');
            return redirect()->route('car.create')->withInput();
        }

        $car->car_name = $request->input('car_name');
        $car->car_model = $request->input('car_model');
        $car->owner_id = $ownerId;
        $car->save();
        toastr()->success('Updated Successfully');


        return redirect()->route('car.show', $car->id);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);   
        $car->delete();
        toastr()->success('Deleted Successfully');
        return redirect('/');
    }
    
}

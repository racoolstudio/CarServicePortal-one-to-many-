<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;


class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::all();
        return view('Owner.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Owner.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' =>'required|min:1|max:40',
            'last_name' =>'required|min:1|max:50',
        
        ]);

        if($validator->fails()){
    
            toastr()->error('Oops! Something went wrong!');
            
            return redirect()->route('owner.create')->withErrors($validator)->withInput();

        }
    
       
        $owner = new Owner();
        $owner->first_name = $request->input('first_name');
        $owner->last_name = $request->input('last_name');
        $owner->save();

        toastr()->success('Owner Created');

        return redirect()->route('owner.show', $owner->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owner = Owner::findOrFail($id);
        return view('Owner.show',compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $owner = Owner::findOrFail($id);
        return view('Owner.edit',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner = Owner::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'first_name' =>'required|min:1|max:40',
            'last_name' =>'required|min:1|max:50',
        
        ]);

        if($validator->fails()){
    
            toastr()->error('Oops! Something went wrong!');
            
            return redirect()->route('owner.create')->withErrors($validator)->withInput();

        }
    

        
        $owner->first_name = $request->input('first_name');
        $owner->last_name = $request->input('last_name');
        $owner->save();
        toastr()->success('Owner Details Updated');

        return redirect()->route('owner.show', $owner->id);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $owner = Owner::findOrFail($id);
        $carOwner = Car::where('owner_id',$owner->id)->first();
   
        if($carOwner){
            toastr()->error('Can\'t Delete,Because Owner Has A Car !');
            return redirect('owner');
        }
        $owner->delete();
        toastr()->success('Deleted Successfully');
        return redirect('owner');
    }



}

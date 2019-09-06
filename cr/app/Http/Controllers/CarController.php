<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Session;
use Image;
use Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cars = Car:: orderBy('id','desc')->paginate(5);
        return view('main.cars.all',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
        //store
        $car=new Car;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->type = $request->type;
        $car->transmission = $request->transmission;
        $car->rent = $request->rent;
        $car->descr = $request->descr;
        $car->ac = $request->ac;
        $car->fuel = $request->fuel;


          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('images/'.$filename);  
          Image::make($image)->save($location);  
          $car->image = $filename;

        
        $car->save();
        Session::flash('success','The Post has been added successfully!!');
        return redirect()->route('cars.show',$car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $car = Car::find($id);

            return view('main.cars.show',compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $car = Car::find($id);

        return view('main.cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car=Car::find($id);
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->type = $request->input('type');
        $car->transmission = $request->input('transmission');
        $car->rent = $request->input('rent');
        $car->doors = $request->input('doors');
        $car->ac = $request->input('ac');
        $car->fuel = $request->input('fuel');

     
             $image = $request->file('image');
         $filename = time().'.'.$image->getClientOriginalExtension();
         $location = public_path('images/'.$filename);  
         Image::make($image)->save($location);  
            $oldfilename=$car->image;
         //Update
         $car->image = $filename;
//          Delete
         Storage::delete($oldfilename);
     
        

        $car->save();

        Session::flash('success','The Post has been updated successfully!!');

        return redirect()->route('cars.show',$car->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $car=Car::find($id);
       Storage::delete($car->image);
       $car->delete();
       Session::flash('success','The Post is deleted successfully');
       return redirect()->route('cars.index');
    }
}

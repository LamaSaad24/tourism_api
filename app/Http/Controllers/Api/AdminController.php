<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Guide;
use App\Models\Driver;
use App\Models\Programme;
use App\Models\Tour;

class AdminController extends Controller
{

//Add Tour Function----------------------------------------------------------------------

    // function addTour(Request $request){

    //     $validator = Validator::make($request->all(),[
    //         'guide_id' => 'required|exists:guides,id',
    //         'driver_id' => 'required|exists:drivers,id',
    //         'programme_id' => 'required|exists:programmes,id',
    //         'price' => 'required|numeric|between:0,9999.99',
    //         'number' => 'required|unique:tours,number|between:0,6',
    //     ],[
    //         //messages for Errores...............................

    //         'guide_id.exists' => 'Guide not found.',
    //         'driver_id.exists' => 'Driver not found.',
    //         'programme_id.exists' => 'Programme not found.',
    //         'number.unique' => 'Namber already exists.',

    //     ]);

    //     if($validator->fails()){
    //         return response()->json([
    //             'message' => $validator->errors()->first()
    //         ], 401);
    //     }

    //     $guide = Guide::find($request->guide_id);
    //     $driver = Driver::find($request->driver_id);
    //     $programme = Programme::find($request->programme_id);

    //     $tour = new Tour();
    //     $tour->guide_id = $guide->id;
    //     $tour->driver_id = $driver->id;
    //     $tour->programme_id = $programme->id;
    //     $tour->price = $request->price;
    //     $tour->number = $request->number;

    //     $tour->save();

    //     return response()->json([
    //         'message' => 'Tour added successfully.',
    //         'tour' => $tour,
    //     ],201);
    // }

// Update Tour Function------------------------------------------------------------------------

    // function updateTour(Request $request, $id){

    //     $validator = Validator::make($request->all(),[
    //         'guide_id' => 'required|exists:guides,id',
    //         'driver_id' => 'required|exists:drivers,id',
    //         'programme_id' => 'required|exists:programmes,id',
    //         'price' => 'required|numeric|between:0,9999.99',
    //         'number' => 'required|between:0,6',
    //     ],[
    //         //messages for Errores...............................

    //         'guide_id.required' => 'Please select a guide.',
    //         'driver_id.required' => 'Please select a driver.',
    //         'programme_id.required' => 'Please select a programme.',
    //         'guide_id.exists' => 'Guide not found.',
    //         'driver_id.exists' => 'Driver not found.',
    //         'programme_id.exists' => 'Programme not found.',

    //     ]);

    //     if($validator->fails()){
    //         return response()->json([
    //             'message' => $validator->errors()->first()
    //         ], 401);
    //     }

    //     $tour = Tour::find($id);

    //     if(!$tour){
    //         return response()->json([
    //             'message' => 'Tour not found!'
    //         ]);
    //     }

    //     $tour->guide_id = $request->guide_id;
    //     $tour->driver_id = $request->driver_id;
    //     $tour->programme_id = $request->programme_id;
    //     $tour->price = $request->price;
    //     $tour->number = $request->number;

    //     $tour->save();

    //     return response()->json([
    //         'message' => 'Tour updated successfully.',
    //         'tour' => $tour,
    //     ]);

    // }

//DELETE TOUR FUNCTION----------------------------------------------------------------------------

    // function destroyTour(Request $request, $id){

    //     $tour = Tour::find($id);

    //     if(!$tour){return response()->json(['message' => 'Tour Not Found!.']);}

    //     $tour->delete();

    //     return response()->json([
    //         'message' => 'Tour Deleted Successfully!'
    //     ]);
    // }
}

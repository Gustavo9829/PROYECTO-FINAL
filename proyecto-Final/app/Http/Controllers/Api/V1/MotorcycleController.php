<?php

namespace App\Http\Controllers\Api\v1;


use App\Models\Motorcycle;
use Illuminate\Http\Response;
use App\Http\Requests\SaveMotorcycleRequest;
use App\Http\Controllers\Api\Controller;
use Symfony\Component\Mime\Message;

class MotorcycleController extends Controller
{
    public function index()
    {
        
            $motorcycles = Motorcycle::all();

            return response()->json(['success' => true, 'data' => $motorcycles ]);
        } 

    public function show($id)
    {
  
            $motorcycle = Motorcycle::find($id);

            return $this->checkModelExists(function () use ($motorcycle){
                return response()->json(['success' => true, 'data => $motorcycle']);

            }, $motorcycle);
    }
    public function store(SaveMotorcycleRequest $request)
    {
        
            $motorcycle = Motorcycle::create($request->all());

            return response()->json(['success' => true, 'message' => trans('messages.motorcycle.created'),'data' => $motorcycle], Response::HTTP_CREATED);
        } 

    public function update(SaveMotorcycleRequest $request, $id)
    {
        
            $motorcycle = Motorcycle::find($id);

            return $this->checkModelExists(function () use ($motorcycle, $request){
            $motorcycle->update($request->all());

            return response()->json(['success' => true, 'message' => trans('messages.motorcycle.updated'), 'data' => $motorcycle], Response::HTTP_CREATED);
        }, $motorcycle);

    }
    public function destroy($id)
    {

            $motorcycle = Motorcycle::find($id);

            return $this->checkModelExists(function () use ($motorcycle) {
                $motorcycle->delete();

            return response()->json(null, Response::HTTP_NO_CONTENT);
        
        }, $motorcycle);
    }
}
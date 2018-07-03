<?php

namespace App\Http\Controllers;

use App\Building;
use App\State;
use Illuminate\Http\Request;

class buildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildList = Building::orderBy('id', 'DESC')->paginate(10);
        $negeriList = State::get();
        return view('building.index', compact('buildList', 'negeriList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negeriList = State::get();
        return view('building.create', compact('negeriList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [  
            'building_id' => 'required',       
            'service_number' => 'required',
            'description' => 'required',
            'status' => 'required',
            'state' => 'required',
        ]);

        Building::create([
            'building_id' => $request['building_id'],
            'service_number' => $request['service_number'],
            'building_group' => $request['building_group'],
            'building_name' => $request['building_name'],
            'description' => $request['description'],
            'status' => $request['status'],
            'state' => $request['state'],
        ]);
        session()->flash('status', 'Successfully add new building!');      
        return redirect()->route('building.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buildEdit = Building::find($id);
        $negeriList = State::get();
        return view('building.edit', compact('buildEdit', 'negeriList'));
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
        
        //return $request->all(); exit();
        $this->validate($request, [  
            'building_id' => 'required',       
            'service_number' => 'required',
            'description' => 'required',
            'status' => 'required',
            'state' => 'required',
        ]);
        Building::whereId($id)->update([
            'service_number' => $request['service_number'],
            'building_group' => $request['building_group'],
            'building_name' => $request['building_name'],
            'description' => $request['description'],
            'status' => $request['status'],
            'state' => $request['state'],
        ]);
        session()->flash('status', 'Successfully updated a building details!');      
        return redirect()->route('building.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Building::destroy($id);
        session()->flash('status', 'Successfully deleted a details!');
        return redirect()->route('building.index');
    }
}

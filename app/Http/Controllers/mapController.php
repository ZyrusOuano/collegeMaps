<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Http\Requests\mapRequest;
use RealRashid\SweetAlert\Facades\Alert;



class mapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = College::query()->get();
        return view('maps.index', ['map'=> $maps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'maps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(mapRequest $request)
    {
        College::query()->create($request->all());

        Alert::success('College has been added!');

        return redirect('/maps');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $map = College::query()->find($id);
        return view('maps.view', ['map' => $map]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $map = College::query()->find($id);
        return view('maps.edit', ['map' => $map]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(mapRequest $request, string $id)
    {
        $map = College::query()->find($id);


        $map->update([
            'name' => $request->name,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'website' => $request->website,
            'contact_number' => $request->contact_number,
    ]);
        Alert::success('College Information is successfully updated!');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        College::query()->find( $id)->delete();
        Alert::success('College has been deleted!');
        return redirect()->back();
    }
}

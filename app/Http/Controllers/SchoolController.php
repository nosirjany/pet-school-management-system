<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required',
            'city' => 'required',
            'address' => 'required',
            'director_name' => 'required',
        ]);
        School::create($request->all());
        return redirect()->route('schools.index')->with('success', 'Школа добавлена');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school=School::query()->findOrFail($id);
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required',
            'city' => 'required',
            'address' => 'required',
            'director_name' => 'required',
        ]);
        $school=School::query()->findOrFail($id);
        $school->update($request->all());
        return redirect()->route('schools.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('schools.index')->with('success', 'Удалено');
    }
}

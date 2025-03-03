<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("departments.index",["Departments"=>department::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredepartmentRequest $request)
    {
        //
        $data = $request->validated();
        department::create($data);
        return redirect()->route('departments.index')->with('success', 'Department Added successfully!');
//        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
        //
        return view("departments.update",["data"=>$department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        //
        $data = $request->validated();
//        dd($data);
        $department->update([
            'name' => $data["name"],
            'description' => $data["description"],
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully!');
    }
}

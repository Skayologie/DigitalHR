<?php

namespace App\Http\Controllers;

use App\Models\Cursus;
use App\Http\Requests\StoreCursusRequest;
use App\Http\Requests\UpdateCursusRequest;
use App\Models\Formation;
use App\Models\User;

class CursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        //
        return view("cursus.index",[
            'career'=>Cursus::all(),
            "user"=>$user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {

        return view("cursus.create",[
            'user'=>User::where(),
            'formations'=>Formation::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCursusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cursus $cursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cursus $cursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCursusRequest $request, Cursus $cursus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cursus $cursus)
    {
        //
    }
}

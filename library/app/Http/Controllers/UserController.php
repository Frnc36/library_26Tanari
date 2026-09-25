<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all(); /* ezt írtuk */
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
    public function store(Request $request)
    {
        $record = new User();
        //ez van mögötte
        /* $record->fill($request->all());
        $record->save(); */
        $record->create($request->all());
        return $record;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $record = User::findorFail($user->id);
        /* $record->fill($request->all());
        $record->save(); */
        $record->update($request->all());
        return $record; //hiba jelzés miatt érdemes, mert ezek eljárások
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //return $record = User::findorFail($user->id)->delete();
        $record = User::destroy($user->id);
        return $record;
    }
}

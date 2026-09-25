<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use App\Http\Requests\StoreCopyRequest;
use App\Http\Requests\UpdateCopyRequest;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Copy::all();
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
    public function store(StoreCopyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Copy $copy)
    {
        return $copy;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copy $copy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCopyRequest $request, Copy $copy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copy $copy)
    {
        //
    }
}

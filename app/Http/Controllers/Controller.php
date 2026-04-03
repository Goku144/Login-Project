<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


abstract class Controller
{
    /**
     * Display a listing of the resource.
     */
    public abstract function index();

    /**
     * Show the form for creating a new resource.
     */
    public abstract function create();

    /**
     * Store a newly created resource in storage.
     */
    public abstract function store(Request $request);

    /**
     * Display the specified resource.
     */
    public abstract function show(string $id);

    /**
     * Show the form for editing the specified resource.
     */
    public abstract function edit(string $id);

    /**
     * Update the specified resource in storage.
     */
    public abstract function update(Request $request, string $id);

    /**
     * Remove the specified resource from storage.
     */
    public abstract function destroy(string $id);
}
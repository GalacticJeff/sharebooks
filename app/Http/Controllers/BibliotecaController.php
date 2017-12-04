<?php

namespace App\Http\Controllers;

use App\biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('app/biblioteca');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function show(biblioteca $biblioteca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function edit(biblioteca $biblioteca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, biblioteca $biblioteca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function destroy(biblioteca $biblioteca)
    {
        //
    }
}

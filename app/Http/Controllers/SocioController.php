<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocioRequest;
use App\Models\socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios= socio::orderBy('apellido')->orderBy('nombre')->get();
        return view('socio.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocioRequest $request)
    {
        $datos=$request->validated();

        $socio= socio::create($datos);

        return redirect()->route('socio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function show(socio $socio)
    {
        return view('socio.show', compact('socio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function edit(socio $socio)
    {
        return view('socio.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function update(SocioRequest $request, socio $socio)
    {
        $datos= $request->validated();

        $socio->update($datos);
        return redirect()->route('socio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function destroy(socio $socio)
    {
        //
    }
}

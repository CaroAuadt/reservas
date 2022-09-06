<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocioRequest;
use App\Models\Socio;
use Illuminate\Http\Request;

/**
 * Class SocioController
 * @package App\Http\Controllers
 */
class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $socios = Socio::paginate();

        return view('socio.index', compact('socios'))
            ->with('i', (request()->input('page', 1) - 1) * $socios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $socio = new Socio();
        return view('socio.create', compact('socio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocioRequest $request)
    {
        $datos=$request->validated();

        $socio= Socio::create($datos);


        return redirect()->route('socios.index')
            ->with('success', 'Socio creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
         $socio = Socio::find($id);

         return view('socio.show', compact('socio'));
     }
    // public function show(ocio $socio)
    // {
    //     return view('socio.show', compact('socio'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socio = Socio::find($id);

        return view('socio.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Socio $socio
     * @return \Illuminate\Http\Response
     */
    public function update(SocioRequest $request, Socio $socio)
    {
        $datos= $request->validated();

        $socio->update($datos);

        return redirect()->route('socios.index')
            ->with('success', 'Socio actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $socio = Socio::find($id)->delete();

        return redirect()->route('socios.index')
            ->with('success', 'Socio eliminado satisfactoriamente');
    }
}

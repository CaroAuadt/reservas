<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Socio;
use App\Models\socio as ModelsSocio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ReservaController
 * @package App\Http\Controllers
 */
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::paginate();

        return view('reserva.index', compact('reservas'))
            ->with('i', (request()->input('page', 1) - 1) * $reservas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserva = new Reserva();
        //dd($reserva::FILAS);
        $socios = Socio::select('apellido', 'nombre', 'id')->orderBy('apellido')->get();

        //dd($socios)
        return view('reserva.create', compact('reserva', 'socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Reserva::$rules);

        if (Reserva::select('id')
            ->where('fila', '=', $request->fila)
            ->where('columna', '=', $request->columna)
            ->where('fecha_reserva', '=', $request->fecha_reserva)->exists()
        ) {
            return redirect()->route('reservas.create')
                ->with('error', 'Reserva ya existente! No se puede reservar. Intente con otras butacas');
        } else {
            $reserva = Reserva::create($request->all());
            $socio= Socio::find($request->socio_id);

            Storage::append('reservas.log', 'Reserva para fecha ' . Carbon::parse($request->fecha_reserva)->format('d/m/Y') . ' en fila:' . $request->fila . ' columna: ' . $request->columna . ' para el socio: '. $socio->apellido . ', ' . $socio->nombre  );
            return redirect()->route('reservas.index')
                ->with('success', 'Reserva creada satisfactoriamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);

        return view('reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);

        $socios = Socio::find($reserva->socio_id)->get();

        return view('reserva.edit', compact('reserva', 'socios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        request()->validate(Reserva::$rules);

        if (Reserva::select('id')
            ->where('fila', '=', $request->fila)
            ->where('columna', '=', $request->columna)
            ->where('fecha_reserva', '=', $request->fecha_reserva)->exists()
        ) {
            return redirect()->route('reservas.create')
                ->with('error', 'Reserva ya existente! No se puede actualizar. Intente con otras butacas');
        } else {

            $reserva->update($request->all());

            return redirect()->route('reservas.index')
                ->with('success', 'Reserva actualizada correctamente');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id)->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva eliminada correctamente');
    }
}

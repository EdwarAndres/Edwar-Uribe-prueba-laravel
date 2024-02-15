<?php

namespace App\Http\Controllers;

use App\PedidosEstado;
use Illuminate\Http\Request;

/**
 * Class PedidosEstadoController
 * @package App\Http\Controllers
 */
class PedidosEstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidosEstados = PedidosEstado::paginate();

        return view('pedidos-estado.index', compact('pedidosEstados'))
            ->with('i', (request()->input('page', 1) - 1) * $pedidosEstados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidosEstado = new PedidosEstado();
        return view('pedidos-estado.create', compact('pedidosEstado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PedidosEstado::$rules);

        $pedidosEstado = PedidosEstado::create($request->all());

        return redirect()->route('pedidos-estados.index')
            ->with('success', 'PedidosEstado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidosEstado = PedidosEstado::find($id);

        return view('pedidos-estado.show', compact('pedidosEstado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedidosEstado = PedidosEstado::find($id);

        return view('pedidos-estado.edit', compact('pedidosEstado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PedidosEstado $pedidosEstado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidosEstado $pedidosEstado)
    {
        request()->validate(PedidosEstado::$rules);

        $pedidosEstado->update($request->all());

        return redirect()->route('pedidos-estados.index')
            ->with('success', 'PedidosEstado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pedidosEstado = PedidosEstado::find($id)->delete();

        return redirect()->route('pedidos-estados.index')
            ->with('success', 'PedidosEstado deleted successfully');
    }
}

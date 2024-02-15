<?php

namespace App\Http\Controllers;

use App\TiendasProducto;
use Illuminate\Http\Request;

/**
 * Class TiendasProductoController
 * @package App\Http\Controllers
 */
class TiendasProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendasProductos = TiendasProducto::paginate();

        return view('tiendas-producto.index', compact('tiendasProductos'))
            ->with('i', (request()->input('page', 1) - 1) * $tiendasProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendasProducto = new TiendasProducto();
        return view('tiendas-producto.create', compact('tiendasProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiendasProducto::$rules);

        $tiendasProducto = TiendasProducto::create($request->all());

        return redirect()->route('tiendas-productos.index')
            ->with('success', 'TiendasProducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiendasProducto = TiendasProducto::find($id);

        return view('tiendas-producto.show', compact('tiendasProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiendasProducto = TiendasProducto::find($id);

        return view('tiendas-producto.edit', compact('tiendasProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiendasProducto $tiendasProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiendasProducto $tiendasProducto)
    {
        request()->validate(TiendasProducto::$rules);

        $tiendasProducto->update($request->all());

        return redirect()->route('tiendas-productos.index')
            ->with('success', 'TiendasProducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiendasProducto = TiendasProducto::find($id)->delete();

        return redirect()->route('tiendas-productos.index')
            ->with('success', 'TiendasProducto deleted successfully');
    }
}

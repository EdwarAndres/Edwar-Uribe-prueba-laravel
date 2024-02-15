<?php

namespace App\Http\Controllers;

use App\TiendasDistancia;
use Illuminate\Http\Request;

/**
 * Class TiendasDistanciaController
 * @package App\Http\Controllers
 */
class TiendasDistanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendasDistancias = TiendasDistancia::paginate();

        return view('tiendas-distancia.index', compact('tiendasDistancias'))
            ->with('i', (request()->input('page', 1) - 1) * $tiendasDistancias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendasDistancia = new TiendasDistancia();
        return view('tiendas-distancia.create', compact('tiendasDistancia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiendasDistancia::$rules);

        $tiendasDistancia = TiendasDistancia::create($request->all());

        return redirect()->route('tiendas-distancias.index')
            ->with('success', 'TiendasDistancia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiendasDistancia = TiendasDistancia::find($id);

        return view('tiendas-distancia.show', compact('tiendasDistancia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiendasDistancia = TiendasDistancia::find($id);

        return view('tiendas-distancia.edit', compact('tiendasDistancia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiendasDistancia $tiendasDistancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiendasDistancia $tiendasDistancia)
    {
        request()->validate(TiendasDistancia::$rules);

        $tiendasDistancia->update($request->all());

        return redirect()->route('tiendas-distancias.index')
            ->with('success', 'TiendasDistancia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiendasDistancia = TiendasDistancia::find($id)->delete();

        return redirect()->route('tiendas-distancias.index')
            ->with('success', 'TiendasDistancia deleted successfully');
    }
}

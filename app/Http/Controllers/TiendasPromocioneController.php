<?php

namespace App\Http\Controllers;

use App\TiendasPromocione;
use Illuminate\Http\Request;

/**
 * Class TiendasPromocioneController
 * @package App\Http\Controllers
 */
class TiendasPromocioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendasPromociones = TiendasPromocione::paginate();

        return view('tiendas-promocione.index', compact('tiendasPromociones'))
            ->with('i', (request()->input('page', 1) - 1) * $tiendasPromociones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendasPromocione = new TiendasPromocione();
        return view('tiendas-promocione.create', compact('tiendasPromocione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiendasPromocione::$rules);

        $tiendasPromocione = TiendasPromocione::create($request->all());

        return redirect()->route('tiendas-promociones.index')
            ->with('success', 'TiendasPromocione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiendasPromocione = TiendasPromocione::find($id);

        return view('tiendas-promocione.show', compact('tiendasPromocione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiendasPromocione = TiendasPromocione::find($id);

        return view('tiendas-promocione.edit', compact('tiendasPromocione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiendasPromocione $tiendasPromocione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiendasPromocione $tiendasPromocione)
    {
        request()->validate(TiendasPromocione::$rules);

        $tiendasPromocione->update($request->all());

        return redirect()->route('tiendas-promociones.index')
            ->with('success', 'TiendasPromocione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiendasPromocione = TiendasPromocione::find($id)->delete();

        return redirect()->route('tiendas-promociones.index')
            ->with('success', 'TiendasPromocione deleted successfully');
    }
}

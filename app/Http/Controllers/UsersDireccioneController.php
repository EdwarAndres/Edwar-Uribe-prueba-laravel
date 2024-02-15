<?php

namespace App\Http\Controllers;

use App\UsersDireccione;
use Illuminate\Http\Request;

/**
 * Class UsersDireccioneController
 * @package App\Http\Controllers
 */
class UsersDireccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersDirecciones = UsersDireccione::paginate();

        return view('users-direccione.index', compact('usersDirecciones'))
            ->with('i', (request()->input('page', 1) - 1) * $usersDirecciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersDireccione = new UsersDireccione();
        return view('users-direccione.create', compact('usersDireccione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsersDireccione::$rules);

        $usersDireccione = UsersDireccione::create($request->all());

        return redirect()->route('users-direcciones.index')
            ->with('success', 'UsersDireccione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersDireccione = UsersDireccione::find($id);

        return view('users-direccione.show', compact('usersDireccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersDireccione = UsersDireccione::find($id);

        return view('users-direccione.edit', compact('usersDireccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsersDireccione $usersDireccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersDireccione $usersDireccione)
    {
        request()->validate(UsersDireccione::$rules);

        $usersDireccione->update($request->all());

        return redirect()->route('users-direcciones.index')
            ->with('success', 'UsersDireccione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersDireccione = UsersDireccione::find($id)->delete();

        return redirect()->route('users-direcciones.index')
            ->with('success', 'UsersDireccione deleted successfully');
    }
}

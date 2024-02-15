<?php

namespace App\Http\Controllers;

use App\UsersCliente;
use Illuminate\Http\Request;

/**
 * Class UsersClienteController
 * @package App\Http\Controllers
 */
class UsersClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersClientes = UsersCliente::paginate();

        return view('users-cliente.index', compact('usersClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $usersClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersCliente = new UsersCliente();
        return view('users-cliente.create', compact('usersCliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsersCliente::$rules);

        $usersCliente = UsersCliente::create($request->all());

        return redirect()->route('users-clientes.index')
            ->with('success', 'UsersCliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersCliente = UsersCliente::find($id);

        return view('users-cliente.show', compact('usersCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersCliente = UsersCliente::find($id);

        return view('users-cliente.edit', compact('usersCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsersCliente $usersCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersCliente $usersCliente)
    {
        request()->validate(UsersCliente::$rules);

        $usersCliente->update($request->all());

        return redirect()->route('users-clientes.index')
            ->with('success', 'UsersCliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersCliente = UsersCliente::find($id)->delete();

        return redirect()->route('users-clientes.index')
            ->with('success', 'UsersCliente deleted successfully');
    }
}

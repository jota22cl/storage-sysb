<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests\ClienteRequest;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nombre')->paginate();
        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        //request()->validate(Cliente::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $cliente = Cliente::create($request->all());
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente "'.$cliente->nombre.'" creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        //request()->validate(Cliente::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $cliente->update($request->all());
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente "'.$cliente->nombre.'" modificado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $val = $cliente->nombre;
        $cliente->delete();
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente "'.$val.'" ELIMINADO!.');
    }

    public function xdestroy($id)
    {
        //dd($id);
        $cliente = Cliente::find($id);
        $val = $cliente->nombre;
        $cliente->delete();
        //$ccosto = Ccosto::find($id);
        //dd($ccosto);
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente "'.$val.'" eliminado.');
    }
}

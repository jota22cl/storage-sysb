<?php

namespace App\Http\Controllers;

use App\Models\Ccosto;
use Illuminate\Http\Request;

use App\Http\Requests\CcostoRequest;

/**
 * Class CcostoController
 * @package App\Http\Controllers
 */
class CcostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ccostos = Ccosto::orderBy('codigo')->paginate();
        return view('ccosto.index', compact('ccostos'))
            ->with('i', (request()->input('page', 1) - 1) * $ccostos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ccosto = new Ccosto();
        return view('ccosto.create', compact('ccosto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CcostoRequest $request)
    {
        //request()->validate(Ccosto::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $ccosto = Ccosto::create($request->all());
        return redirect()->route('ccostos.index')
            ->with('success', 'Centro de Costo "'.$ccosto->codigo.'" creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ccosto = Ccosto::find($id);
        return view('ccosto.show', compact('ccosto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ccosto = Ccosto::find($id);
        return view('ccosto.edit', compact('ccosto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ccosto $ccosto
     * @return \Illuminate\Http\Response
     */
    public function update(CcostoRequest $request, Ccosto $ccosto)
    {
        //request()->validate(Ccosto::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $ccosto->update($request->all());
        return redirect()->route('ccostos.index')
            ->with('success', 'Centro de Costo "'.$ccosto->codigo.'" modificado.');
    }


/*
    public function delete($id)
    {
        $ccosto = Ccosto::find($id);
        return view('ccosto.delete', compact('ccosto'));
    }
*/
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ccosto = Ccosto::find($id);
        $val = $ccosto->codigo;
        $ccosto->delete();
        return redirect()->route('ccostos.index')
        ->with('success', 'Centro de Costo "'.$val.'" ELIMINADO!.');
    }

    public function xdestroy($id)
    {
        //dd($id);
        $ccosto = Ccosto::find($id);
        $val = $ccosto->codigo;
        $ccosto->delete();
        //$ccosto = Ccosto::find($id);
        //dd($ccosto);
        return redirect()->route('ccostos.index')
            ->with('success', 'Centro de Costo "'.$val.'" eliminado.');
    }
}

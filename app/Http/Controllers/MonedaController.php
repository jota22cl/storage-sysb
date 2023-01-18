<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

use App\Http\Requests\MonedaRequest;

/**
 * Class MonedaController
 * @package App\Http\Controllers
 */
class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monedas = Moneda::orderBy('moneda')->paginate();
        return view('moneda.index', compact('monedas'))
            ->with('i', (request()->input('page', 1) - 1) * $monedas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moneda = new Moneda();
        return view('moneda.create', compact('moneda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonedaRequest $request)
    {
        //request()->validate(Moneda::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
          //dd($request);
        $moneda = Moneda::create($request->all());
        return redirect()->route('monedas.index')
            ->with('success', 'Moneda '.$moneda->moneda.' creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moneda = Moneda::find($id);
        return view('moneda.show', compact('moneda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moneda = Moneda::find($id);
        return view('moneda.edit', compact('moneda'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Moneda $moneda
     * @return \Illuminate\Http\Response
     */
    public function update(MonedaRequest $request, Moneda $moneda)
    {
        //request()->validate(Moneda::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $moneda->update($request->all());
        return redirect()->route('monedas.index')
            ->with('success', 'Moneda '.$moneda->moneda.' modificada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $moneda = Moneda::find($id);
        $val = $moneda->moneda;
        $moneda->delete();
        return redirect()->route('monedas.index')
        ->with('success', 'Moneda "'.$val.'" ELIMINADA!.');
    }

    public function xdestroy($id)
    {
        //dd($id);
        $moneda = Moneda::find($id);
        $val = $moneda->codigo;
        $moneda->delete();
        //$ccosto = Ccosto::find($id);
        //dd($ccosto);
        return redirect()->route('monedas.index')
            ->with('success', 'Moneda "'.$val.'" eliminada.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Ccosto;
use Illuminate\Http\Request;

use App\Http\Requests\BodegaRequest;

/**
 * Class BodegaController
 * @package App\Http\Controllers
 */
class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas = Bodega::orderBy('codigo')->paginate();
        return view('bodega.index', compact('bodegas'))
            ->with('i', (request()->input('page', 1) - 1) * $bodegas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodega = new Bodega();
        $ccostos = CCosto::where('vigente','1')->orderBy('descripcion')->pluck('descripcion','id');
        return view('bodega.create', compact('bodega','ccostos'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodegaRequest $request)
    {
        //request()->validate(Bodega::$rules);
        if (!isset($request->bodegacompartida)) {$request->request->add(['bodegacompartida' => "0"]);}
        if (!isset($request->bodegaocupada)) {$request->request->add(['bodegaocupada' => "0"]);}
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $bodega = Bodega::create($request->all());
        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega "'.$bodega->codigo.'" creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bodega = Bodega::find($id);
        return view('bodega.show', compact('bodega'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bodega = Bodega::find($id);
        $ccostos = CCosto::where('vigente','1')->orderBy('descripcion')->pluck('descripcion','id');
        return view('bodega.edit', compact('bodega','ccostos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(BodegaRequest $request, Bodega $bodega)
    {
        //request()->validate(Bodega::$rules);
        $x=$bodega;
        if (!isset($request->bodegacompartida)) {$request->request->add(['bodegacompartida' => "0"]);}
        if (!isset($request->bodegaocupada)) {$request->request->add(['bodegaocupada' => "0"]);}
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $bodega->update($request->all());
        //dd($request,$bodega,$x);
        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega "'.$bodega->codigo.'" modificada.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bodega = Bodega::find($id);
        $val = $bodega->codigo;
        $bodega->delete();
        return redirect()->route('bodegas.index')
        ->with('success', 'Bodega "'.$val.'" ELIMINADA!.');
    }

    public function xdestroy($id)
    {
        $bodega = Bodega::find($id);
        $val = $bodega->codigo;
        $bodega->delete();
        return redirect()->route('bodegas.index')
        ->with('success', 'Bodega "'.$val.'" eliminada!.');
    }
}

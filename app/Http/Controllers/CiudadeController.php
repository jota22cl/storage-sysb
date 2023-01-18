<?php

namespace App\Http\Controllers;

use App\Models\Ciudade;
use Illuminate\Http\Request;

use App\Http\Requests\CiudadeRequest;

/**
 * Class CiudadeController
 * @package App\Http\Controllers
 */
class CiudadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudade::orderBy('codigo')->paginate();
        return view('ciudade.index', compact('ciudades'))
            ->with('i', (request()->input('page', 1) - 1) * $ciudades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudade = new Ciudade();
        return view('ciudade.create', compact('ciudade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadeRequest $request)
    {
        //request()->validate(Ciudade::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $ciudade = Ciudade::create($request->all());
        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudade = Ciudade::find($id);
        return view('ciudade.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudade = Ciudade::find($id);
        return view('ciudade.edit', compact('ciudade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ciudade $ciudade
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadeRequest $request, Ciudade $ciudade)
    {
        //request()->validate(Ciudade::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $ciudade->update($request->all());
        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ciudade = Ciudade::find($id)->delete();

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade deleted successfully');
    }
}

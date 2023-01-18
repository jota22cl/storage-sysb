<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use Illuminate\Http\Request;

use App\Http\Requests\ComunaRequest;

/**
 * Class ComunaController
 * @package App\Http\Controllers
 */
class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunas = Comuna::orderBy('codigo')->paginate();
        return view('comuna.index', compact('comunas'))
            ->with('i', (request()->input('page', 1) - 1) * $comunas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comuna = new Comuna();
        return view('comuna.create', compact('comuna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComunaRequest $request)
    {
        //request()->validate(Comuna::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $comuna = Comuna::create($request->all());
        return redirect()->route('comunas.index')
            ->with('success', 'Comuna created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comuna = Comuna::find($id);
        return view('comuna.show', compact('comuna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comuna = Comuna::find($id);
        return view('comuna.edit', compact('comuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comuna $comuna
     * @return \Illuminate\Http\Response
     */
    public function update(ComunaRequest $request, Comuna $comuna)
    {
        //request()->validate(Comuna::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $comuna->update($request->all());
        return redirect()->route('comunas.index')
            ->with('success', 'Comuna updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comuna = Comuna::find($id)->delete();

        return redirect()->route('comunas.index')
            ->with('success', 'Comuna deleted successfully');
    }
}

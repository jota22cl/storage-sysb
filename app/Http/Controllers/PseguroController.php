<?php

namespace App\Http\Controllers;

use App\Models\Pseguro;
use Illuminate\Http\Request;

use App\Http\Requests\PseguroRequest;

/**
 * Class PseguroController
 * @package App\Http\Controllers
 */
class PseguroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pseguros = Pseguro::orderBy('codigo')->paginate();
        return view('pseguro.index', compact('pseguros'))
            ->with('i', (request()->input('page', 1) - 1) * $pseguros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pseguro = new Pseguro();
        return view('pseguro.create', compact('pseguro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PseguroRequest $request)
    {
        //request()->validate(Pseguro::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $pseguro = Pseguro::create($request->all());
        return redirect()->route('pseguros.index')
            ->with('success', 'Pseguro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pseguro = Pseguro::find($id);
        return view('pseguro.show', compact('pseguro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pseguro = Pseguro::find($id);
        return view('pseguro.edit', compact('pseguro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pseguro $pseguro
     * @return \Illuminate\Http\Response
     */
    public function update(PseguroRequest $request, Pseguro $pseguro)
    {
        //request()->validate(Pseguro::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $pseguro->update($request->all());
        return redirect()->route('pseguros.index')
            ->with('success', 'Pseguro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pseguro = Pseguro::find($id)->delete();
        return redirect()->route('pseguros.index')
            ->with('success', 'Pseguro deleted successfully');
    }
}

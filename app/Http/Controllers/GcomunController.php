<?php

namespace App\Http\Controllers;

use App\Models\Gcomun;
use Illuminate\Http\Request;

use App\Http\Requests\GcomunRequest;

/**
 * Class GcomunController
 * @package App\Http\Controllers
 */
class GcomunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gcomuns = Gcomun::orderBy('codigo')->paginate();
        return view('gcomun.index', compact('gcomuns'))
            ->with('i', (request()->input('page', 1) - 1) * $gcomuns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gcomun = new Gcomun();
        return view('gcomun.create', compact('gcomun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GcomunRequest $request)
    {
        //request()->validate(Gcomun::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $gcomun = Gcomun::create($request->all());
        return redirect()->route('gcomuns.index')
            ->with('success', 'Gcomun created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gcomun = Gcomun::find($id);
        return view('gcomun.show', compact('gcomun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gcomun = Gcomun::find($id);
        return view('gcomun.edit', compact('gcomun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gcomun $gcomun
     * @return \Illuminate\Http\Response
     */
    public function update(GcomunRequest $request, Gcomun $gcomun)
    {
        //request()->validate(Gcomun::$rules);
        if (!isset($request->vigente)) {$request->request->add(['vigente' => "0"]);}
        $gcomun->update($request->all());
        return redirect()->route('gcomuns.index')
            ->with('success', 'Gcomun updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gcomun = Gcomun::find($id)->delete();
        return redirect()->route('gcomuns.index')
            ->with('success', 'Gcomun deleted successfully');
    }
}

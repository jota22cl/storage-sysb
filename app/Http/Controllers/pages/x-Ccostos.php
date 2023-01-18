<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ccosto;

class Ccostos extends Controller
{
  public function index()
  {
    $ccostos = CCosto::all();
    //return view('content.pages.ccostos',['ccostos'=>$ccostos]);
    return view('content.pages.ccostos',compact('ccostos'));
  }

  public function create()
  {
    return view('content.pages.ccostos-create');
  }

  public function store(Request $request)
  {
    $val = $request->validate([
      'codigo' => 'required|max:10',
      'descripcion' => 'required|max:30',
    ]);
    $ccosto = new CCosto();
    $ccosto->codigo = $request->codigo;
    $ccosto->descripcion = $request->descripcion;
    $ccosto->vigente = $request->vigente;
    $ccosto->save();
    return redirect()->route('pages-ccostos');
  }

  public function show($ccosto_id){
    $ccosto = Ccosto::find($ccosto_id);
    return view('content.pages.ccostos-show',['ccosto'=>$ccosto]);
  }

  public function update(Request $request){
    //dd($request->id);
    $ccosto = Ccosto::find($request->ccosto_id);
    $ccosto->codigo = $request->codigo;
    $ccosto->descripcion = $request->descripcion;
    $ccosto->vigente = $request->vigente;
    $ccosto->save();
    return redirect()->route('pages-ccostos');
  }

  public function destroy($ccosto_id){
    $ccosto = Ccosto::find($ccosto_id);
    $ccosto->delete();
    return redirect()->route('pages-ccostos');
  }

}


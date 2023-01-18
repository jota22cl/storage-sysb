<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Moneda;

class Monedas extends Controller
{
  public function index()
  {
    $monedas = Moneda::all();
    //return view('content.pages.monedas',['monedas'=>$monedas]);
    return view('content.pages.monedas',compact('monedas'));
  }

  public function create()
  {
    return view('content.pages.monedas-create');
  }

  public function store(Request $request)
  {
    $val = $request->validate([
      'moneda' => 'required|max:30',
      'simbolo' => 'required|max:5',
    ]);
    $moneda = new Moneda();
    $moneda->moneda = $request->moneda;
    $moneda->simbolo = $request->simbolo;
    $moneda->vigente = $request->vigente;
    $moneda->save();
    return redirect()->route('pages-monedas');
  }

  public function show($moneda_id){
    $moneda = Moneda::find($moneda_id);
    return view('content.pages.monedas-show',['moneda'=>$moneda]);
  }

  public function update(Request $request){
    //dd($request->id);
    $moneda = Moneda::find($request->moneda_id);
    $moneda->moneda = $request->moneda;
    $moneda->simbolo = $request->simbolo;
    $moneda->vigente = $request->vigente;
    $moneda->save();
    return redirect()->route('pages-monedas');
  }

  public function destroy($moneda_id){
    $moneda = Moneda::find($moneda_id);
    $moneda->delete();
    return redirect()->route('pages-monedas');
  }

}


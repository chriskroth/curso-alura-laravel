<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index() {
        $series = Serie::query()->orderBy("nome")->get();
        $mensagemSucesso = session("mensagem.sucesso");

        return view("series.index", compact('series', 'mensagemSucesso'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {

        Serie::create($request->all());
        //Serie::create($request->only(['nome']));
        //Serie::create($request->except(['_token']));

        //return redirect("/series");

        session()->flash("mensagem.sucesso", "Série incluída com sucesso!");
        return redirect()->route("series.index");
    }

    public function destroy(Request $request) {
        Serie::destroy($request->id);

        session()->flash("mensagem.sucesso", "Série removida com sucesso!");
        return redirect()->route("series.index");
    }
}

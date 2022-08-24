<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index() {
//        $series = Serie::query()->orderBy("nome")->get();
        $series = Series::all();
        $mensagemSucesso = session("mensagem.sucesso");

        return view("series.index", compact('series', 'mensagemSucesso'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {
        $serie = Series::create($request->all());
        //Serie::create($request->only(['nome']));
        //Serie::create($request->except(['_token']));

        //return redirect("/series");

        return redirect()->route("series.index")
            ->with("mensagem.sucesso", "Série '{$serie->nome}' incluída com sucesso!");
    }

    public function destroy(Request $request, int $id) {
        //Serie::destroy($request->id);

        $serie = Series::find($id);
        $serie->delete();

        return redirect()->route("series.index")
            ->with("mensagem.sucesso", "Série '{$serie->nome}' removida com sucesso!");
    }

    public function edit(Request $request, $id) {
        $serie = Series::find($id);

        return view("series.edit", compact("serie"));
    }

    public function update(SeriesFormRequest $request, $id) {
        $serie = Series::find($id);

//        $serie->nome = $request->input("nome");
        $serie->fill($request->all());
        $serie->save();

        return redirect()->route("series.index")
            ->with("mensagem.sucesso", "Série '{$serie->nome}' atualizada com sucesso!");
    }
}

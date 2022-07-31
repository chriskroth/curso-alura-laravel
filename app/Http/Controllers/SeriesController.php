<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index() {
        $series = Serie::query()->orderBy("nome")->get();

        return view("series.index", compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {

        Serie::create($request->all());
//        Serie::create($request->only(['nome']));
//        Serie::create($request->except(['_token']));

        return redirect("/series");
    }
}

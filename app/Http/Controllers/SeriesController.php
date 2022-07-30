<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index() {
        $series = [
            "Stranger Things",
            "The Boys",
            "Loki",
            "Gray's Anathomy"
        ];

        return view("series.index", compact('series'));
    }

    public function create() {
        return view('series.create');
    }
}

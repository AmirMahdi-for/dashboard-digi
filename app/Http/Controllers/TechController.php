<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tech;

class TechController extends Controller
{

    public function list()
    {
        $teches = Tech::all();
        return view('tech.list', compact('teches'));
    }

    public function create()
    {
        $tech = new Tech;
        return view('tech.form', compact('tech'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Tech::create($data);
        return redirect()-> route('tech.form')->withMessage('SUCCESS!');
    }

    public function edit(Tech $tech)
    {
        return view ('tech.form', compact('tech'));
    }

    public function update(Tech $tech, Request $request)
    {
        dd($tech, $request->all());
    }
}

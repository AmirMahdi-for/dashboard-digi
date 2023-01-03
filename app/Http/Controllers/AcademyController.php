<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academy;

class AcademyController extends Controller
{
    public function list()
    {
        $academies = Academy::all();
        return view('academy.list', compact('academies'));
    }

    public function create()
    {
        $academy = new Academy;
        return view('academy.form', compact('academy'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Academy::create($data);
        return redirect()->route('academy.form')->withMessage('SUCCESS!');
    }

    public function edit(Academy $academy)
    {
        return view('academy.form', compact('academy'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function all() {
        $programs = Program::all();
        return view('programs.all', ['programs' => $programs]);
    }

    public function show($id) {
        $id = (int) $id;
        $program = Program::find($id);

        return view('programs.show', ['program' => $program]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        return view('answer.index');
    }

    public function create()
    {
        return view('answer.create');
    }

    public function store(Request $request)
    {
        dd("hello store");
    }

    public function edit($id)
    {
        dd("hello edit");

    }

    public function update(Request $request)
    {
        dd("hello update");

    }

    public function destroy($id)
    {
        dd("hello destroy");

    }
}

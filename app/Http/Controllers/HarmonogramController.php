<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Harm;

class HarmonogramController extends Controller
{
    public function index()
    {
        $harmonogram = Harm::latest()->paginate(5);
        return view('harmonogram.index',compact('harmonogram'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('harmonogram.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'date'=>'required',
            'body'=>'required',
        ]);
        Harm::create($request->all());
        return redirect()->route('harmonogram.index')->with('success','Udalost bola vytvorena uspesne');
    }

    public function show($id)
    {
        $harm = Harm::find($id);
        return view('harmonogram.show', compact('harm'));
    }

    public function edit($id)
    {
        $harm = Harm::find($id);
        return view('harmonogram.edit', compact('harm'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'title'=>'required',
            'body'=>'required',
            'date'=>'required',
        ]);
        Harm::find($id)->update($request->all());
        return redirect()->route('harmonogram.index')->with('success','Udalost bola aktualizovana uspesne');
    }

    public function destroy($id)
    {
        Harm::find($id)->delete();
        return redirect()->route('harmonogram.index')->with('success','Udalost bola vymazana uspesne');
    }
}

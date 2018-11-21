<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source;

class SourcesController extends Controller
{
    public function index()
    {
        $sources = Source::latest()->paginate(5);
        return view('sources.index',compact('sources'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('sources.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'link'=>'required',
        ]);
        Source::create($request->all());
        return redirect()->route('sources.index')->with('success','Link bol vytvoreny uspesne');
    }

    public function show($id)
    {
        $source = Source::find($id);
        return view('sources.show', compact('source'));
    }

    public function edit($id)
    {
        $source = Source::find($id);
        return view('sources.edit', compact('source'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'title'=>'required',
            'link'=>'required',
        ]);
        Source::find($id)->update($request->all());
        return redirect()->route('sources.index')->with('success','Link bol aktualizovany uspesne');
    }

    public function destroy($id)
    {
        Source::find($id)->delete();
        return redirect()->route('sources.index')->with('success','Link bol vymazany uspesne');
    }
}

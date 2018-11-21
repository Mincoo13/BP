<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dl;

class DownloadsController extends Controller
{
    public function index()
    {
        $downloads = Dl::latest()->paginate(5);
        return view('downloads.index',compact('downloads'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('downloads.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'link'=>'required',
        ]);
        Dl::create($request->all());
        return redirect()->route('downloads.index')->with('success','Link bol vytvoreny uspesne');
    }

    public function show($id)
    {
        $dl = Dl::find($id);
        return view('downloads.show', compact('dl'));
    }

    public function edit($id)
    {
        $dl = Dl::find($id);
        return view('downloads.edit', compact('dl'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'title'=>'required',
            'link'=>'required',
        ]);
        Dl::find($id)->update($request->all());
        return redirect()->route('downloads.index')->with('success','Link bol aktualizovany uspesne');
    }

    public function destroy($id)
    {
        Dl::find($id)->delete();
        return redirect()->route('downloads.index')->with('success','Link bol vymazany uspesne');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Producent;
use Illuminate\Http\Request;

class ProducentWebController extends Controller
{
    //

    public function index()
    {
        return view('foto.producent.producent', ['producenci' => Producent::all()]);
    }


    public function create()
    {
        return view('foto.producent.create', ['message' => 'tu będzie formatka do wprowadzania nowego producenta']);
    }

    public function save(Request $request)
    {
//        if ($request->get('nazwa') != null) {
        $producent = new Producent();
        $producent->nazwa = $request->get('nazwa');
        $producent->opis = $request->get('opis');
        $producent->link = $request->get('link');
        $producent->save();
//        }
        return view('foto.producent.index', ['producent' => Producent::all()]);
    }

    public function detail($id)
    {
        $producent = Producent::where('ID', '=', $id)->firstOrFail();
        return view('foto.producent.producent', ['producent' => $producent, 'producenci' => Producent::all()]);
    }


    public function edit($id)
    {
        $producent = Producent::where('ID', '=', $id)->firstOrFail();
        return view('foto.producent.edit', ['producent' => $producent]);
    }


    public function update(Request $request)
    {
        dump("nazwa = " . $request->input('nazwa'));
        $id = $request->input('id');
        $updateData = ['nazwa' => $request->input('nazwa'),
            'opis' => $request->input('opis'),
            'link' => $request->input('link')];
        Producent::whereId($id)->update($updateData);
        return view('foto.producent.index', ['producent' => Producent::all()]);

    }


    public function delete($id)
    {
        $producent = Producent::find($id);
        $producent->delete();
        return view('foto.producent.producent', ['producent' => Producent::all()]);
    }
}

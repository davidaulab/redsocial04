<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use App\Http\Requests\ToyRequest;
use Illuminate\Support\Facades\Storage;

class ToyController extends Controller
{
    //
    public function index () {
        $toys = Toy::orderByDesc ('id')->get();
        return view ('toyindex', compact ('toys'));
    }

    public function show (Toy $toy) {
        return view ('toyshow', compact ('toy'));
    }

    public function create () {
        return view ('toycreate');
    }

    public function store (ToyRequest $request) {
        $toy = Toy::create ($request->validated());
        $url = '';
        if ($request->hasFile('img')) {
            $url = Storage::url ($request->file ('img')->store ('public/toy'));
        }
        $toy->img = $url;
        $toy->saveOrFail ();
        return redirect ()->route ('toyindex');
    }

    public function edit (Toy $toy) {
        return view ('toyedit', compact ('toy'));
    }
    public function update(ToyRequest $request, Toy $toy) {
        $toy->fill ($request->validated());
        $url = '';
        if ($request->hasFile('img')) {
            $url = Storage::url ($request->file ('img')->store ('public/toy'));
        }
        $toy->img = $url;
        $toy->saveOrFail ();
        return redirect ()->route ('toyindex');
    }
    public function destroy (Toy $toy) {
        $toy->deleteOrFail();
        return redirect ()->route ('toyindex');
    }
}

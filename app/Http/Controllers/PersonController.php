<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;

class PersonController extends Controller
{
    //
    public function index () {

        $people = User::orderBy('name')->get (); 
        return view ('people.index', compact ('people'));

    }
    public function show (User $person) {
    
        return view ('people.show', compact ('person'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $person = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => '12345678'
         ]);
        $person->saveOrFail ();
        return redirect()->route ('people.index');

    }

    public function edit (User $person) {
        $roles = Rol::orderBy('name')->get (); 
        return view ('people.edit', compact ('person', 'roles'));
    }

    public function update (Request $request, User $person) {

        $person->fill([
            'name' => $request->name,
            'email' => $request->email
         ]);
        $person->saveOrFail ();
        return redirect()->route ('people.index');
    }

    public function destroy (User $person) {
        $person->deleteOrFail();
        
        return redirect()->route ('people.index');
    }
}

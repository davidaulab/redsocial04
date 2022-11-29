<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Tool;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $experiences = Experience::orderByDesc ('from')->get ();
       
        return view ('experiences.index', compact ('experiences'));
    }

    public function mycv () {
        $professionals = Experience::where (['tipo' => 'Profesional'])->get ();
        $courses = Experience::where (['tipo' => 'Formativa'])->get ();
         //dd ($professionals);

        return view ('home',  compact ('courses', 'professionals'));

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $tools = Tool::orderBy('name')->get();
        //dd ($tools);
        return view ('experiences.create', compact ('tools'));
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
        $pageurl = '';
        $giturl = '';
        if (isset ($request->pageurl)) {
            $pageurl =  $request->pageurl;
        }
        if (isset ($request->giturl)) {
            $giturl = $request->giturl;
        }

        $experience = Experience::create  ([
            'title' => $request->title, 
            'description' => $request->description, 
            'company'=> $request->company,
            'tipo' => $request->tipo, 
            'pageurl' => $pageurl, 
            'giturl' => $giturl, 
            'from' => $request->from, 
            'to'=> $request->to
        ]);
        //dd ($request);
        $experience->tools()->attach($request->tools);
        $experience->saveOrFail();

        return redirect()->route ('experiences.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
        return view ('experiences.show', compact ('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
        $tools = Tool::orderBy('name')->get();

        return view ('experiences.edit', compact ('experience', 'tools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
        $experience->fill ([
            'title' => $request->title, 
            'description' => $request->description, 
            'company'=> $request->company,
            'tipo' => $request->tipo, 
            'pageurl' => $request->pageurl, 
            'giturl' => $request->giturl, 
            'from' => $request->from, 
            'to'=> $request->to
        ]);
        //dd ($request);
        $experience->tools()->sync($request->tools);
        $experience->saveOrFail();

        return redirect()->route ('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}

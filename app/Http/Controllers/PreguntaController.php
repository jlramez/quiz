<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use App\Models\Seccione;
use App\Models\Tipo;


/**
 * Class PreguntaController
 * @package App\Http\Controllers
 */
class PreguntaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::paginate();
        

        return view('pregunta.index', compact('preguntas'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pregunta = new Pregunta();
        $secciones= Seccione::all();
        $tipos=Tipo::all();
        return view('pregunta.create', compact('pregunta','secciones','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pregunta::$rules);

        $pregunta = Pregunta::create($request->all());

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = Pregunta::find($id);

        return view('pregunta.show', compact('pregunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secciones=Seccione::all();
        $pregunta = Pregunta::find($id);
        $tipos=TIpo::all();

        return view('pregunta.edit', compact('pregunta','secciones','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pregunta $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        request()->validate(Pregunta::$rules);

        $pregunta->update($request->all());

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id)->delete();

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta deleted successfully');
    }
}

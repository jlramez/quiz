<?php

namespace App\Http\Controllers;

use App\Models\Opcione;
use App\Models\Pregunta;
use Illuminate\Http\Request;

/**
 * Class OpcioneController
 * @package App\Http\Controllers
 */
class OpcioneController extends Controller
{

	protected $paginationTheme = 'bootstrap';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = Opcione::paginate();
        $preguntas=Pregunta::all();

        return view('opcione.index', compact('opciones','preguntas'))
            ->with('i', (request()->input('page', 1) - 1) * $opciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opcione = new Opcione();
        $preguntas=Pregunta::all();

        return view('opcione.create', compact('opcione','preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Opcione::$rules);

        $opcione = Opcione::create($request->all());

        
        return redirect()->route('opciones.index')
            ->with('success', 'Opcione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opcione = Opcione::find($id);

        return view('opcione.show', compact('opcione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opcione = Opcione::find($id);
        $preguntas=Pregunta::all();


        return view('opcione.edit', compact('opcione','preguntas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Opcione $opcione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opcione $opcione)
    {
        request()->validate(Opcione::$rules);

        $opcione->update($request->all());

        return redirect()->route('opciones.index')
            ->with('success', 'Opcione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $opcione = Opcione::find($id)->delete();

        return redirect()->route('opciones.index')
            ->with('success', 'Opcione deleted successfully');
    }
}

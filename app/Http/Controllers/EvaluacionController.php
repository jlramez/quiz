<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Opcione;
use App\Models\Respuesta;
class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        //Muestra cada pregunta de la evaluación
      $preguntas=Pregunta::find($id);
      $ultima_pregunta=Pregunta::max('id');//calcular ultima pregunta del cuestionariro
    
      $opciones=Opcione::where('preguntas_id',$id)->get();
      return view('evaluacion.index', compact('preguntas','opciones','ultima_pregunta'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
 
        
        if($request->opciones_idm)
        {
            $opciones_id=$request->opciones_idm;
                foreach ($opciones_id as $opciones=>$valor)
                {
                    $id_opcion=$valor;
                    $respuesta=new respuesta();			
                    $respuesta->preguntas_id= $id;
                    $respuesta->opciones_id= $id_opcion;
                    $respuesta->created_at= now();
                    $respuesta->updated_at= now();
                    $respuesta->save();
                }
        }
        if($request->opciones_idu)
        {
            $opciones_id=$request->opciones_idu;             
                    $id_opcion=$request->opciones_idu;
                    $respuesta=new respuesta();			
                    $respuesta->preguntas_id= $id;
                    $respuesta->opciones_id= $id_opcion;
                    $respuesta->created_at= now();
                    $respuesta->updated_at= now();
                    $respuesta->save();
                
        }
            
          
            switch($id)
        {//switch id
            case '1':
                $valor_respuesta=Opcione::find($request->opciones_idu);//obtener valor para saber a que seccion ir
                switch ($valor_respuesta->valor) 
                {
                    case 'a':
                        $next_question=$id+1;//pasa a la siguiente pregunta
                        return redirect()->route('evaluaciones.index',$next_question);
                        break;
                    case 'b':
                        //$next_question=9;
                        return redirect()->route('home');//,$next_question);
                        break;
    
                    default:
                                
                            $next_question=$id+1;//pasa a la siguiente pregunta
                            return redirect()->route('evaluaciones.index',$next_question);
                            //->with('success', 'Respuesta registrada.');
                }

            case '4':
                $valor_respuesta=Opcione::find($request->opciones_idu);//obtener valor para saber a que seccion ir
                switch ($valor_respuesta->valor) 
                {
                    case 'a':
                        $next_question=5;
                        return redirect()->route('evaluaciones.index',$next_question);
                        break;
                    case 'b':
                        $next_question=9;
                        return redirect()->route('evaluaciones.index',$next_question);
                        break;
    
                    default:
                                
                            $next_question=$id+1;//pasa a la siguiente pregunta
                            return redirect()->route('evaluaciones.index',$next_question);
                            //->with('success', 'Respuesta registrada.');
                }
            //}
            break;
            case '5':
                /*$valor_respuesta=Opcione::join('preguntas','preguntas_id','=','preguntas.id')
                ->select('opciones.valor','opciones.preguntas_id')
                ->where('opciones.preguntas_id','=',$id)
                ->where('opciones.valor', '=','si')->first();*/
                $valor_respuesta=Opcione::find($request->opciones_idu);
            //obtener valor para saber a que seccion ir
                switch ($valor_respuesta->valor) 
                {
                    case 'a':
                        $next_question=6;
                        return redirect()->route('evaluaciones.index',$next_question);
                        break;
                    case 'b':
                        $next_question=8;
                        return redirect()->route('evaluaciones.index',$next_question);
                        break;
                    case 'c':
                            $next_question=7;
                            return redirect()->route('evaluaciones.index',$next_question);
                        break;
                }
                case '10':
                  
                    return view('home');
                break;
            break;
                    default:
                                
                            $next_question=$id+1;//pasa a la siguiente pregunta
                            return redirect()->route('evaluaciones.index',$next_question);
                            //->with('success', 'Respuesta registrada.');
                
        }//switch id
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

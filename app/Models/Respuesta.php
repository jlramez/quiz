<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\pregunta;
use App\Models\Respuesta;
/**
 * Class Respuesta
 *
 * @property $id
 * @property $preguntas_id
 * @property $opciones_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Respuesta extends Model
{
    
    static $rules = [
		'preguntas_id' => 'required',
		'opciones_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['preguntas_id','opciones_id'];

    public function preguntas()
    {
  
      return $this->HasOne(Pregunta::class,'id','preguntas_id');//relacion con secciones
  
    }
    public function opciones()
    {
  
      return $this->HasOne(Opcione::class,'id','opciones_id');//relacion con secciones
  
    }
  

}

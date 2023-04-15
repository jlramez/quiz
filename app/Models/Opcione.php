<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pregunta;

/**
 * Class Opcione
 *
 * @property $id
 * @property $contenido
 * @property $preguntas_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Opcione extends Model
{
    
    static $rules = [
		'contenido' => 'required',
		'preguntas_id' => 'required',
    'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['valor','contenido','preguntas_id'];

    public function preguntas()
    {
  
      return $this->HasOne(Pregunta::class,'id','preguntas_id');//relacion con secciones
  
    }

}

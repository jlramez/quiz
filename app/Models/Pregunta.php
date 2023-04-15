<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seccione;
use App\Models\Tipo;

/**
 * Class Pregunta
 * comment
 * @property $id 
 * @property $contenido
 * @property $secciones_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pregunta extends Model
{
    
    static $rules = [
		'contenido' => 'required',
		'secciones_id' => 'required',
    'tipos_id' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contenido','secciones_id','tipos_id'];

    public function secciones()
	{

		return $this->HasOne(Seccione::class,'id','secciones_id');//relacion con secciones

	}
  public function tipos()
	{

		return $this->HasOne(Tipo::class,'id','tipos_id');//relacion con secciones

	}



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cuestionario;

/**
 * Class Seccione
 *
 * @property $id
 * @property $name
 * @property $descripcion
 * @property $cuestionarios_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seccione extends Model
{
    
    static $rules = [
		'name' => 'required',
		'descripcion' => 'required',
		'cuestionarios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','descripcion','cuestionarios_id'];

    public function cuestionarios()
    {
  
      return $this->HasOne(Cuestionario::class,'id','cuestionarios_id');//relacion con secciones
  
    }


}

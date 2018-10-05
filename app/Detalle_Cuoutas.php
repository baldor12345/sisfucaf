<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_Cuotas extends Model
{
    use SoftDeletes;
    protected $table = 'detalle_cuotas';
    protected $dates = ['deleted_at'];
    
    /**
     * Método para listar
     * @param  model $query modelo
     * @param  string $name  nombre
     * @return sql        sql
     */

    public function scopelistar($query, $idcredito){

        return $query->where(function($subquery) use($idcredito)
		            {
		            	if (!is_null($codigo)) {
		            		$subquery->where('idcredito', ' = ', ''.$idcredito.'');
		            	}
		            })
        			->orderBy('fecha_pago', 'ASC');
    }

}

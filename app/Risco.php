<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Risco extends Model {

	protected $fillable=[
		'id_activo',
		'vulnerabilidade',
		'ameaca',
		'consequencia',
		'probabilidade',
		'impacto',
		'obs_final'
	];

	public function tratamentos() {
		return $this->hasMany('App\Tratamento');
	}

	public function activo() {
		return $this->belongsTo('App\Activo');
	}

}

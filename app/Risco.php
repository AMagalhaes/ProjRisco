<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Risco extends Model {

	protected $fillable=[
		'activo_id',
		'vulnerabilidade',
		'ameaca',
		'consequencia',
		'probabilidade',
		'impacto',
		'cat_risco',
		'obs_final'
	];

	public function tratamentos() {
		return $this->hasMany('App\Tratamento');
	}

	public function activo() {
		return $this->belongsTo('App\Activo');
	}


	public function devVal($id) {
		$linha = Activo::find($id);

		return $linha->valor;
	}

	public function recalcImpotancia() {

		$this->cat_risco = $this->impacto * $this->probabilidade * $this->devVal($this->activo_id);
		$this->save();
	}

}

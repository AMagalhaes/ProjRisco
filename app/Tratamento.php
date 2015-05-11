<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tratamento extends Model {

	protected $fillable=[
	'descricao',
	'controlo',
	'beneficios',
	'obs_final'
	];

	public function risco() {
		return $this->belongsTo('App\Tratamento');
	}

}

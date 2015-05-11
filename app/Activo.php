<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Activo extends Model {

	protected $fillable = [
		'nome',
		'valor',
		'obs',
		'localizacao',
		'tipo',
		'obs_final'
	];

	public function riscos() {
		return $this->hasMany('App\Risco');
	}

}

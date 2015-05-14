<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Activo extends Model {

	protected $fillable = [
		'nome',
		'valor',
		'obs',
		'localizacao',
		'tipo'
	];

	public function riscos() {
		return $this->hasMany('App\Risco');
	}

	public function recalcImpotancia() {
		$sumImpacto = 0;
		$sumProbabilidade = 0;

		$numRiscos = $this->riscos()->count();

		foreach ($this->riscos as $risco) {
			$sumImpacto += $risco->impacto;
			$sumProbabilidade += $risco->probabilidade;
		}

		$this->importancia = $this->valor * ($sumImpacto / $numRiscos) * ($sumProbabilidade / $numRiscos);

		$this->save();
	}

}

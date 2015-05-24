<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Activo extends Model
{

    protected $fillable = [
        'nome',
        'valor',
        'disponibilidade',
        'integridade',
        'confidencialidade',
        'obs',
        'localizacao',
        'tipo'
    ];

    public function riscos()
    {
        return $this->hasMany('App\Risco');
    }

    public function updateRiscImportance()
    {
        foreach ($this->riscos as $risco) {
            $risco->recalcImpotancia();
        }
    }

    public function calcValorAtivo()
    {
        $this->valor = ($this->disponibilidade * 0.6) + ($this->integridade * 0.2) + ($this->confidencialidade * 0.2);
        return $this->valor;
    }
}
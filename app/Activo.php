<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Activo extends Model
{

    protected $fillable = [
        'nome',
        'disponibilidade',
        'integridade',
        'confidencialidade',
        'valor',
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
        $this->valor = ($this->disponibilidade * 0.4) + ($this->integridade * 0.2) + ($this->confidencialidade * 0.4);
        return $this->valor;
    }
    public function verificaRisco($id)
    {
      $activo = Risco::where('activo_id',$id)->get()->toArray();
      if(count($activo) > 0){
        return true;
      }
    }
}

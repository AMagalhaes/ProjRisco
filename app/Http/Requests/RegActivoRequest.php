<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class RegActivoRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();

        if ($user->type === 'normal') {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'disponibilidade' => 'required',
            'integridade' => 'required',
            'confidencialidade' => 'required',
            'localizacao' => 'required',
            'tipo' => 'required'
        ];
    }

}

<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class AddRiscoRequest extends Request {

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
			'idActivo' => 'required',
			'vulnerabilidade' => 'required',
			'ameaca' => 'required',
			'consequencia' => 'required',
			'probabilidade' => 'required',
			'impacto' => 'required'
		];
	}

}
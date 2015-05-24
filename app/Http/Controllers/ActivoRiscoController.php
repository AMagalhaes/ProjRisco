<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Risco;
use App\Activo;
use App\Tratamento;
class ActivoRiscoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$riscos = Risco::all();
		return view('risco.lista', compact('riscos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($activoID)
	{
		// @todo: Validar o ID 'activoID'
		return view('risco.adiciona', ['activo' => Activo::find($activoID)]);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($idActivo, Requests\RegRiscoRequest $request )
	{
		// cria o risco
		$risco = new Risco(Input::all());

		// obtem o activo e associo o risco
		Activo::find($idActivo)->riscos()->save($risco);

		$risco->recalcImpotancia();

		return redirect()->route('risco.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('risco.view', ['risco' => Risco::find($id)]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idActivo, $id)
	{
		$risco = Risco::findOrFail($id);

		return view ('risco.risco', compact('risco'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idActivo, $id)
	{
		$risco = Risco::find($id);
		$risco->fill(Input::all());
		$risco->save();

		// recalcula a importancia do activo
		$risco->recalcImpotancia();

		return redirect()->route('risco.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idActivo, $id)
	{

		if(Tratamento::where('risco_id',$id)->get()){
			return redirect('risco')->with('message', 'Não pode apagar um Activo com riscos definidos');
		}

		$risco = Risco::find($id);
		$risco->delete();


		return redirect()->back();
	}
}

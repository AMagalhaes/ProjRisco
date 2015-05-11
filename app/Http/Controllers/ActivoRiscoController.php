<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Risco;
use App\Activo;

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
		return view('risco.adiciona', ['idActivo' => $activoID]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($idActivo)
	{
		// cria o risco
		$risco = new Risco(Input::all());

		// obtem o activo e associo o risco
		Activo::find($idActivo)->riscos()->save($risco);

		return redirect()->back();
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
	public function edit($id)
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
	public function update($id)
	{
		$risco = Risco::find($id);
		$risco->fill(Input::all());
		$risco->save();


		return redirect()->route('risco.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$risco = Risco::find($id);
		$risco->delete();

		return redirect()->back();
	}

}

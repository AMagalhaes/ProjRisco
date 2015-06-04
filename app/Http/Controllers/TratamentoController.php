<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Risco;
use App\Tratamento;

class TratamentoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tratams = Tratamento::all();

		return view('trata.listaTrata', compact('tratams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($idRisco)
	{
		return view('trata.addTrata', ['risco' => Risco::find($idRisco)]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($idRisco, Requests\RegTrataRequest $request )
	{
		// cria o tratamento
		$trata = new Tratamento(Input::all());

		// obtem o risco e associa o tratamento ao risco
		Risco::find($idRisco)->tratamentos()->save($trata);

		return redirect()->route('trata.index');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('trata.view', ['trata' => Tratamento::find($id)]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$trata = Tratamento::findOrFail($id);

		return view ('trata.formEditaTrata', compact('trata'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$trata = Tratamento::find($id);
		$trata->fill(Input::all());
		$trata->save();

		return redirect()->route('trata.show', [$id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$trata = Tratamento::find($id);
		$trata->delete();

		return redirect()->back();
	}

}
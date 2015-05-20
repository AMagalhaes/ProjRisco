<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Activo;
use App\Risco;
class ActivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('localizacaoFilter') && !empty(Input::get('localizacaoFilter'))) {

			$activos = Activo::where('localizacao', Input::get('localizacaoFilter'))->get();
		} else {
			$activos = Activo::all();
		}

		if (Input::has('tipoFilter') && !empty(Input::get('tipoFilter')) ) {

			$activos = Activo::where('tipo', Input::get('tipoFilter'))->get();
		} else {
			$activos = Activo::all();
		}
		return view('activo.listaActivos', compact('activos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('activo.addActivo');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$input = Request::all();
		$activo = Activo::create(Input::all());

		return redirect()->route('activo.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		// fazer o get de todos os riscos

		$riscos = Risco::where('activo_id',$id)->get();
		$activo = Activo::find($id);
		return view('activo.view', compact('riscos','activo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$activo = Activo::findOrFail($id);

		return view ('activo.formEditaActivos', compact('activo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$activo = Activo::find($id);
		$activo->fill(Input::all());
		$activo->save();

		$activo->recalcImpotancia();

		return redirect()->route('activo.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$activo = Activo::find($id);
		$activo->delete();

		return redirect()->back();
	}

}

<?php namespace App\Http\Controllers\Productions;

use App\Http\Controllers\Controller;
use App\Itheatre\Repositories\ItheatreRepository;
use App\Models\Production;

class ShowController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($season, $slug, ItheatreRepository $repo)
	{
        $production = $repo->getProductionWithStaffBySlug($slug);

        if (is_object($production)) {
            return view('productions.show', [
                'production' => $production,
                'season' => $season,
            ]);
        } else {
            $production = Production::where('production_url', 'by-the-way-meet-vera-stark')->first();
            return view('productions.show', [
                'production' => $production,
                'season' => $season
            ]);
        }

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

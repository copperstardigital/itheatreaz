<?php namespace App\Http\Controllers\Productions;

use App\Http\Controllers\Controller;
use App\Itheatre\Repositories\ItheatreRepository;

class ProductionsController extends Controller {

    private $repo;

    function __construct(ItheatreRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($season)
	{
		$productions = $this->repo->getProductions($season);

        if (strpos($season, '-') !== FALSE) {
            $explode = explode('-', $season);
            $startYear = (int) $explode[0];

            if (!empty($productions) && $startYear >= 2009) {
                return view('productions.productions', [
                    'productions' => $productions,
                    'season' => $season
                ]);
            } else {
                return redirect()->home();
            }
        } else {
            $productions = $this->repo->getProductions('2015-2016');
            if (!empty($productions)) {
                return view('productions.productions', [
                    'productions' => $productions,
                    'season' => '2015-2016'
                ]);
            } else {
                return redirect()->home();
            }

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

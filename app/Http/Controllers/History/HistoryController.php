<?php namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use App\Itheatre\Repositories\ItheatreRepository;

/**
 * Class HistoryController
 * @package App\Http\Controllers\History
 */
class HistoryController extends Controller {

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
	public function index()
	{
        $seasons = $this->repo->getSeasons();
		return view('history.history', array(
            'seasons' => $seasons
        ));
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
	 * @var $season
	 * @return Response
	 */
	public function show($season)
	{
		$productions = $this->repo->getProductions($season);
        return view('history.season', array(
           'productions' => $productions,
           'season' => $season
        ));
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

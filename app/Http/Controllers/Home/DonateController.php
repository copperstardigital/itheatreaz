<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Itheatre\Repositories\ItheatreRepository;

class DonateController extends Controller {

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
		$articles = $this->repo->getArticlesById(7);
        return view('home.donate', array(
           'articles' => $articles,
           'collaborators' => $this->repo->getDonors('Collaborator'),
           'sustainers' => $this->repo->getDonors('Sustainer'),
           'partners' => $this->repo->getDonors('Partner'),
           'contributors' => $this->repo->getDonors('Contributor'),
           'allies' => $this->repo->getDonors('Ally'),
           'supporters' => $this->repo->getDonors('Supporter'),
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

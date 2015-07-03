<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Itheatre\Repositories\ItheatreRepository;

class IndexController extends Controller {

    /**
     * @var \App\Itheatre\Repositories\ItheatreRepository
     */
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
        $news = $this->repo->getNews();
        $carousel = $this->repo->getCarousel();
        $next = $this->repo->getNextShow();

        return view('home.index', [
            'newsItems' => $news,
            'carousel' => $carousel,
            'next' => $next
        ]);
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
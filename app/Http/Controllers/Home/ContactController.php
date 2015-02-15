<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Itheatre\Notifications\Flash;
use App\Itheatre\Repositories\ItheatreRepository;
use App\Itheatre\Validators\Contact;
use App\Itheatre\Mailers\ContactMailer;

class ContactController extends Controller {
    /**
     * @var \App\Itheatre\Repositories\ItheatreRepository
     */
    private $repo;
    private $validator;
    private $mailer;

    function __construct(ItheatreRepository $repo, Contact $validator, ContactMailer $mailer)
    {
        $this->repo = $repo;
        $this->validator = $validator;
        $this->mailer = $mailer;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = $this->repo->getArticlesById(14);
        return view('home.contact', array(
            'articles' => $articles
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
	public function store(ContactRequest $request)
	{
        $this->mailer->contact($request->all());

        //$this->thankYou->thank($data);

        Flash::success('Your message has been received.  We will get back to you shortly.');
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

<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailChimpRequest;
use App\Itheatre\Notifications\Flash;
use App\Itheatre\Validators\EmailValidator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Mailchimp;
use Mailchimp_List_AlreadySubscribed;

class MailChimpController extends Controller {

    protected $validator;

    function __construct(EmailValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(MailChimpRequest $request)
	{
//        if (!$this->validator->validate(Input::all())) {
//            return Redirect::back()->withErrors($this->validator->errors())->withInput();
//        }

        $emailAddress = $request->get('email');

        try {
            $mailchimp = new Mailchimp(getenv('MC_API_KEY'));
            $mailchimp->lists->subscribe(getenv('MC_LIST_ID'), ['email' => $emailAddress], null, 'html');

            Flash::success('You have been sent a subscription request. Please opt in to our mailing list by clicking the confirmation link.');
            return Redirect::back();
        } catch (Mailchimp_List_AlreadySubscribed $e) {
            Flash::danger($e->getMessage());
            return Redirect::back();
        } catch (\Exception $e) {
            Flash::danger($e->getMessage());
            return Redirect::back();
        }

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
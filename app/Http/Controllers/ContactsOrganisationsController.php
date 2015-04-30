<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Http\Requests\CreateFileRequest;
use Auth;
use App\Contact;
use App\Organisation;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;

class ContactsOrganisationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $contact = Contact::find(Auth::user()->id);
        return view('organisations.myorga', ['contact' => $contact]);
	}

    public function getUpload()
    {
        return view('upload.uploadform');
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

    public function postUpload(CreateFileRequest $request)
    {

    }
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

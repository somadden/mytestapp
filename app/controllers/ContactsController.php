<?php

class ContactsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Contact::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::json();

		return Contact::create(array(
			'first_name' => $input->first_name,
			'last_name' => $input->last_name,
			'email_address' => $input->email_address,
			'description' => $input->description
		));
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		return Contact::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$contact = Contact::find($id);
		$input = Input::json();

		$contact->first_name = $input->first_name;
		$contact->last_name = $input->last_name;
		$contact->description = $input->description;
		$contact->email_address = $input->email_address;

		$contact->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		return Contact::find($id)->delete();
	}

}
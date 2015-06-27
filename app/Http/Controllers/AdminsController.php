<?php namespace App\Http\Controllers;

class AdminsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admins');
		//
	}

}

<?php

class UserController extends \BaseController {

	/**
	 * Login form
	 * GET /admin/login
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make("user.login");
	}

	/**
	 * Login in
	 * POST /admin/login
	 *
	 * @return Redirect
	 */
	public function doLogin()
	{
		$rules = [
			"username" => "required|min:3",
			"password" => "required|min:6"
		];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
			return Redirect::route("admin.login")->withErrors($validator)->withInput(Input::except("password"));

		$remember = Input::has('remember') ? true : false;

		if(Auth::attempt(array("username" => Input::get('username'), "password" => Input::get('password')), $remember))
			return Redirect::route("admin.dashboard")->with('success', Lang::get('login.loggedin'));
		else
			return Redirect::route("admin.login")->withErrors(array("username" => Lang::get("login.auth-error")))->withInput(Input::except("password"));
	}

	/**
	 * Logout from user
	 * GET /admin/logout
	 *
	 * @return Redirect
	 */
	public function logout()
	{
		Auth::logout();

		return Redirect::route("homepage")->with('success', Lang::get("user.loggedout"));
	}

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
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
	 * GET /user/{id}/edit
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
	 * PUT /user/{id}
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
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
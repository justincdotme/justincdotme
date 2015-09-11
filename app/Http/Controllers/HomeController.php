<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/


    /**
     * Show the application dashboard to the user.
     *
     * @param Request $request
     * @return Response
     */
	public function index(Request $request)
	{
        $contacted = ($request->cookie('cconf')) ? $request->cookie('cconf') : false;
		return view('public.home')
            ->withContacted($contacted);
	}

}

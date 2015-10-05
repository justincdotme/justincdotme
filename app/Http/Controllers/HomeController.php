<?php

namespace App\Http\Controllers;

use App\Http\Transformers\PageTransformer;
use App\Models\Page;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal;

class HomeController extends Controller
{
    //Page name in Page model.
    protected $page;

    public function __construct()
    {
        $this->page = 'home';
    }

    /**
     * Get the homepage content and metadata.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        //Get the projects, eager load the project images and skills
        $projects = Project::with('images', 'skills')->get();

        //Check if the contact submission cookie has been set
        $contacted = ($request->cookie('cconf')) ? $request->cookie('cconf') : false;

        return view('public.home')
            ->withContacted($contacted)
            ->withProjects($projects);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}

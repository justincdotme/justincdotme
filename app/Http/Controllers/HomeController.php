<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        //Has the contact form been submitted?
        $contacted = session()->get('contacted', false);

        return view('public.home', [
            'contacted' => $contacted,
            'projects' => $projects,
            'title' => 'Justin Christenson is a web Developer in Vancouver, WA.'
        ]);
    }
}

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
        return view('public.home', [
            'contacted' => session()->get('contacted', false),
            'projects' => Project::with('images', 'skills')->get(),
            'title' => 'Justin Christenson is a web Developer in Vancouver, WA.'
        ]);
    }
}

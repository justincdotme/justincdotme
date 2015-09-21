<?php

namespace App\Http\Controllers;

use App\Http\Transformers\PageTransformer;
use App\Models\Page;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //Page name in Page model.
    protected $page;

    public function __construct()
    {
        $this->page = 'about';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {
            $page = Page::getPageData($this->page)->firstOrFail();
        } catch(Exception $e) {
            return $this->response->errorNotFound();
        }

        return $this->response()
            ->item($page, new PageTransformer())
            ->addMeta('status', 'success')
            ->setStatusCode(200);
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

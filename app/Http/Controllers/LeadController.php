<?php

namespace App\Http\Controllers;

use App\Http\Transformers\PageTransformer;
use App\Models\Page;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    //Page name in Page model.
    protected $page;

    //Sender's email address
    protected $senderEmail;

    public function __construct()
    {
        $this->page = 'contact';
        $this->_senderEmail = null;
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
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->merge(['phone' => str_replace('-', '', $request->input('phone'))]);

        //Extend the validator to check for alphabetic characters with allowed spaces
        Validator::extend('alpha_spaces', function($attribute, $value)
        {
            return preg_match('/^[\pL\s]+$/u', $value);
        });

        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha_spaces',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'numeric'
        ]);

        if ($validator->fails())
        {
            return redirect('/#contact')->withErrors($validator->errors())->withInput($request->all());
        }

        try {
            $name = $request->input('name');
            $this->_senderEmail = $request->input('email');
            $phone = $request->input('phone');
            $message = $request->input('message');

            //Construct the email message
            $details['name'] = $name;
            $details['email'] = $this->_senderEmail;
            $details['phone'] = $phone;
            $details['content'] = $message;
            $details['ipAddress'] = $request->getClientIp();

            //Send confirmation to customer
            Mail::send('emails.message-confirm', $details, function($message)
            {
                $message->to($this->_senderEmail)->subject('Confirmation');
                $message->replyTo('info@justinc.me');
            });

            //Send customer info to administrator
            Mail::send('emails.new-message', $details, function($message)
            {
                $message->to('info@justinc.me')->subject('New justinc.me Contact Request');
            });

        } catch(Exception $e)
        {
            if($request->ajax())
            {
                return response()->json([
                    'status' => 'error'
                ]);
            }
            return redirect('/#contact')->withInput($request->all());
        }

        //Return a JSON response if the form was submitted via AJAX.
        if($request->ajax())
        {
            return response()->json([
                'status' => 'success
                '])
                ->withCookie(cookie()->forever('cconf', true));
        }

        //Return a redirect if the form was not submitted via AJAX.
        return redirect('/#contact')
            ->withCookie(cookie()->forever('cconf', true));
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

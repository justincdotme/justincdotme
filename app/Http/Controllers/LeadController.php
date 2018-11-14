<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    //Sender's email address
    protected $senderEmail;

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

        //https://packagist.org/packages/buzz/laravel-google-captcha
        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha_spaces',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'numeric',
            'g-recaptcha-response' => 'required|captcha'
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


        if($request->ajax())
        {
            return response()->json([
                'status' => 'success
                '])
                ->withCookie(cookie()->forever('cconf', true));
        }

        return redirect('/#contact')
            ->withCookie(cookie()->forever('cconf', true));
    }
}

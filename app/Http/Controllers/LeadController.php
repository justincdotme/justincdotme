<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
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
        Validator::extend('alpha_spaces', function($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value);
        });

        //https://packagist.org/packages/buzz/laravel-google-captcha
        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha_spaces',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required|numeric',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            if (request()->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);
            }
            return redirect('/#contact')
                ->withErrors(
                    $validator->errors()
                )->withInput(
                    $request->all()
                );
        }

        try {
            $name = $request->input('name');
            $senderEmail = $request->input('email');
            $phone = $request->input('phone');
            $message = $request->input('message');

            //Construct the email message
            $details['name'] = $name;
            $details['email'] = $senderEmail;
            $details['phone'] = $phone;
            $details['content'] = $message;
            $details['ipAddress'] = $request->getClientIp();

            //Send customer info to administrator
            //TODO - Queue this
            Mail::send('emails.new-message', $details, function($message) {
                $message->to('info@justinc.me')->subject('New justinc.me Contact Request');
            });

        } catch(Exception $e) {
            if($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => [
                        'All' => [
                            'An error has occurred.'
                        ]
                    ]
                ]);
            }
            return redirect('/#contact')->withInput($request->all());
        }

        session()->put('contacted', true);

        if($request->ajax()) {
            return response()->json([
                'status' => 'success
            ']);
        }

        return redirect('/#contact');
    }
}

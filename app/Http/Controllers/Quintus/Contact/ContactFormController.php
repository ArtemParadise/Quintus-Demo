<?php

namespace App\Http\Controllers\Quintus\Contact;

use App\Http\Controllers\Controller;
use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function sendMessage(Request $request) {
        if(isset($request)) {
            $form_user_first_name = $request->user_first_name;
            $form_user_last_name = $request->user_last_name;
            $receiver = 'larolid546@mailcupp.com';

            $data = array(
                "name" => $form_user_first_name . " " . $form_user_last_name,
                'subject' => $request->user_subject,
                "email" => $request->user_email,
                "message" => $request->user_message,
            );

            Mail::to($receiver)->send(new FeedbackMail($data));
        }
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // TO EMAIL: --> SET YOUR OWN EMAIL HERE
//            $to = 'support@modeltheme.com';
//        dd(request()->all());
//            $to = 'vacexec919@mailcupp.com';


//            Mail::to($to)->send(new FeedbackMail($message));
            $to = 'xeyarak217@mailcupp.com';
            $subject = $request->user_subject;
            $form_user_first_name = $request->user_first_name;
            $form_user_last_name = $request->user_last_name;
            $form_user_email = $request->user_email;
            $form_comment = $request->user_message;

            $message = '';
            $message .= "First Name: " .  $form_user_first_name . "\r\n";
            $message .= "Last Name: " .  $form_user_last_name . "\r\n";
            $message .= "Email: " . $form_user_email . "\r\n";
            $message .= "Subject: " . $subject . "\r\n";
            $message .= "Message: " . $form_comment;

            $headers = 'From: ' . $form_user_first_name . ' '. $form_user_last_name . '<'. $form_user_email . '>';
            if( mail( $to, $subject, $message, $headers ) ) {
                #echo "<p>Your email has been sent! Thank you</p>";
            }
//        Mail::to($to)->send(new FeedbackMail($message));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

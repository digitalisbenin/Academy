<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;


class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');

        $message = $request->input('message');


        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,

        ];
        //$email = new ContactMail($data);
        //mail('test@idealexpertisecpa.com',$name,$message,headers,parameters);
        Mail::to('test@idealexpertisecpa.com')->send(new ContactMail($data));
        return redirect('/')->with('success', 'Votre message a été envoyé avec succès!');
}



    public function send(Request $request)
    {

        $name = $request->input('Nom');
        $email = $request->input('email');
        $subject = $request->input('subject');

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ];

        // Mail::send('emails.contact', $details, function($message) use ($request) {
        //     $message->to('ilyassine2008@gmail.com') // Remplacez par votre adresse e-mail
        //             ->subject($request->subject);
        // });
        Mail::raw("Nom: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}", function($message) use ($request) {
            $message->to('test@idealexpertisecpa.com') // Remplacez par votre adresse e-mail
                    ->subject('Nouveau message de contact');
        });


        return back()->with('success', 'Votre message a été envoyé avec succès!');
    }



}

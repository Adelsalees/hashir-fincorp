<?php

namespace App\Http\Controllers\Front;


use App\Models\Enquiry;
use App\Mail\EnquiryEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gcaptcha;
use App\Models\Services;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
 
    public function ServiceRequest(Request $request){
        $resultJson=Gcaptcha::verifyCaptcha( $request->get('recaptcha-response'));
        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.3) {
            $data = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'organization' => 'nullable',
                'country-state' => 'required',
                'city' => 'required',
                'service'=>"required",
            ]);
            if(Services::create($data)){
              
                $email='finprocorporatesolutions@gmail.com';
                Mail::send('front.emails.service-enquiry', ['enquiry' => $data], function ($message) use ($email, $request) {
                    $message->to($email)
                        ->subject($request->name .' | '.$request->service .' | Service Enquiry');
                        
                });
        
                //send email to client
                $email = $request->email;
                Mail::send('front.emails.thank-you', ['enquiry' => $data], function ($message) use ($email, $request) {
                    $message->to($email)
                        ->replyTo('finprocorporatesolutions@gmail.com')
                        ->subject('Finpro'. ' | Thank you');
                });
                return response('OK');
            }
            
        }
    }
    public function Contact(Request $request){
        $resultJson=Gcaptcha::verifyCaptcha( $request->get('recaptcha-response'));
        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.3) {
            $data = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'nullable'
            ]);
            if(Enquiry::create($data)){
              
                $email='finprocorporatesolutions@gmail.com';
                Mail::send('front.emails.enquiry-mail', ['enquiry' => $data], function ($message) use ($email, $request) {
                    $message->to($email)
                        ->subject($request->name .' | Contact Request');
                        
                });
        
                //send email to client
                $email = $request->email;
                Mail::send('front.emails.thank-you', ['enquiry' => $data], function ($message) use ($email, $request) {
                    $message->to($email)
                        ->replyTo('finprocorporatesolutions@gmail.com')
                        ->subject('Finpro'. ' | Thank you');
                });
                return response('OK');
            }
            
        }
    }
    
}

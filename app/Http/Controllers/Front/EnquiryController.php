<?php

namespace App\Http\Controllers\Front;


use App\Models\Enquiry;
use App\Mail\EnquiryEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gcaptcha;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request){
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
            if (Enquiry::create($data)) {
                Mail::to(config('envs.mail_to'))->send(new EnquiryEmail($data));
                return ('OK');
            }
        }else {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
    }
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
            ]);
         
        }
    }
}

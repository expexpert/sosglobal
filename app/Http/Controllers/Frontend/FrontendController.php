<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;
use Redirect;
use Mail;
use App\Models\User;
use Session;
use URL;
use Cookie;
use Validator;
use PDF;
use App\Models\SubscriptionHistory;

use Illuminate\Support\Facades\Input;

class FrontendController extends Controller
{
 private $partner_id;

 public function __construct()
 {
        //blockio init

 }
 public function doLogin(Request $request)
 {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $user = User::where('email',$request->email)->first();

    if($user){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

         User::where('id',Auth::user()->id)->update(array('ip_address'=>$request->ip()));

         return redirect('admin');
     }else{
         return redirect()->back()->with('error', 'Login details are not valid');
     }

 }else{
    return redirect()->back()->with('error', 'Email address not found.');
}
}



function doRegister(Request $request)
{

    $validator = Validator::make($request->all(), [
        'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
           return redirect('register')->withErrors($validator->errors());
       } else {


            //validations are passed, save new user in database
         $User = new User;
         $User->name = $request->name;
         $User->email = $request->email;
         $User->role = 'customer';
         $User->password = bcrypt($request->password);
         $User->save();

       // \Mail::to($request->email)->send(new \App\Mail\NewRegisterMail($details));

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
       Session::flash('success','You have successfully registered!');
       return redirect('admin?plan=success');

   }
}


}

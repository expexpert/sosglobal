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

use Illuminate\Support\Facades\Input;

class FrontendController extends Controller
{
   private $partner_id;

   public function __construct()
   {
        //blockio init

   }

   public function sendMail(){

    $superAdminInfo = User::findOrFail(1);
    $info = array(
        'url' => url('/'),
        'superadmin_name' => "kjhjhjkhk",
        'desc' => "sssssssssssssssss",
        'logo' => url('/').'/public/images/logo.png',
        'title' => 'New Ticket By ',
        'ticket_url' => url('/').'/superadmin/tickets/9/edit'
    ); 
    $to = "karnailbhutto@gmail.com";

    $mailInfo =  Mail::send('email.ticket_generate', $info, function ($message) use($to) {
      $message->to($to, 'Laravel')
      ->subject('You have a new ticket found');
      $message->from("Laravel@Laravel.io", 'Laravel');
  });

    die('dine');


    $info = array(
        'name' => "name",
        'price' => 7,
        'url' => url('/')        
    );
    $from = "mygoogle@gmail.com";
    $to = "webtesthere@gmail.com";


    Mail::send('email.mail', $info, function ($message) use($to, $from) {
      $message->to($to, 'Laravel')
      ->subject('Laravel Registration complete');
      $message->from("Laravel@Laravel.io", 'Laravel');
  });


}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return redirect('login');
       // $plans = Plan::get(); 

       // return view("frontend.index", compact("plans"));
   }
   
}

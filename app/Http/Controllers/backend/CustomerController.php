<?php
namespace App\Http\Controllers\backend;

use Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Session;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

  public function index()
  {

    $customers = User::where('role','=','customer')->orderBy('id','DESC')->get();

    return view('backend.customers.index',compact('customers'));

  }


  public function create()
  {
    return view('backend.customers.create');
  }


  public function store(Request $request)
  {
    $input = Request::all();  

    $validation = Validator::make($input,
     [
       'name' => 'required',
       'email' => 'required',
     ]);

    if( $validation->fails() ) {
     return redirect('admin/customers/create')->withErrors($validation->errors());
   }
   else
   {

     $dataArray = array(

      "name"     =>   $input['name'],
      "email"   =>      $input['email'],
      "role"   =>     'customer',
      'password' => Hash::make('12345678'),
    );

     User::create($dataArray);
     Session::flash('success','Insert record successfully.');
     return redirect('admin/customers');
   }
 }

 public function show($id)
 {
  $customer = User::find($id);
  return view('backend.customers.show',compact('customer'));
}


public function edit($id)
{
  $customers = User::findOrFail($id);
  return view('backend.customers.edit',compact('customers'));
}


public function update(Request $request, $id)
{
 $user = User::findOrFail($id);
 $input = Request::all();
 $validation = Validator::make($input,
   [

     'name' => 'required',
     'email' => 'required',

   ]);

 if( $validation->fails() ) {
   return redirect('/admin/customers/'.$id.'/edit')->withErrors($validation->errors());
 }
 else
 {

   $user->name =$input['name'];
   $user->email=$input['email'];
   if(isset($input['password'])){
     $user->password=bcrypt($input['password']);
   }
   $user->updated_at=Carbon::now();
   $user->save();

   Session::flash('success','Update record successfully.');
   return redirect('admin/customers');
 }
}

public function delete_user($id){

 $user = User::findOrFail($id);

 $user->delete();

 Session::flash('success','Successfully deleted.');
 return redirect('admin/customers');
}

public function destroy($id)
{


  $user = User::findOrFail($id);
  $user->delete();
  Session::flash('success','Successfully deleted.');
  return redirect('admin/customers');
}

}




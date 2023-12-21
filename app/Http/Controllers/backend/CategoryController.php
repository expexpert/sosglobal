<?php
namespace App\Http\Controllers\backend;

use Request;
use App\Models\User;
use App\Models\Category;
use Auth;
use Carbon\Carbon;
use Session;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{

  public function index()
  {

    $category = Category::where('role','=','customer')->orderBy('id','DESC')->get();

    return view('backend.category.index',compact('category'));

  }


  public function create()
  {
    return view('backend.category.create');
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
     return redirect('admin/category/create')->withErrors($validation->errors());
   }
   else
   {

     $dataArray = array(

      "name"     =>   $input['name'],
      "email"   =>      $input['email'],
      "role"   =>     'customer',
      'password' => Hash::make('12345678'),
    );

     Category::create($dataArray);
     Session::flash('success','Insert record successfully.');
     return redirect('admin/category');
   }
 }

 public function show($id)
 {
  $customer = Category::find($id);
  return view('backend.category.show',compact('customer'));
}


public function edit($id)
{
  $category = Category::findOrFail($id);
  return view('backend.category.edit',compact('category'));
}


public function update(Request $request, $id)
{
 $user = Category::findOrFail($id);
 $input = Request::all();
 $validation = Validator::make($input,
   [

     'name' => 'required',
     'email' => 'required',

   ]);

 if( $validation->fails() ) {
   return redirect('/admin/category/'.$id.'/edit')->withErrors($validation->errors());
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
   return redirect('admin/category');
 }
}

public function delete_user($id){

 $user = Category::findOrFail($id);

 $user->delete();

 Session::flash('success','Successfully deleted.');
 return redirect('admin/category');
}

public function destroy($id)
{


  $user = Category::findOrFail($id);
  $user->delete();
  Session::flash('success','Successfully deleted.');
  return redirect('admin/category');
}

}




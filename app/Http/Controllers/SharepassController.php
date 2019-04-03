<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Passwords;
use App\pass;
use App\password;

use Response;
class SharepassController extends Controller
{
	public function boot()
{
    Schema::defaultStringLength(191);
}
   public function index()
   	
		{
           
      $pass="ilnk";
    	return view('sharePass',compact('pass'));
		}
		

public function show(Request $request, $id )
{  	
		 $pass="ilnk";
     $encpassword = Passwords::orderBy('id', 'desc')->first();
     $pass1= $encpassword->password;
     $pass=decrypt($pass1);
    // $url = action('SharepassController@index');
     //$url1 = action('SharepassController@show');
    // $url2 = action('SharepassController@store');
    //$password= $request->input('password');
 //$password=Passwords::get ( ['password'] );
   //$lastvalue = $collection->value()->last();    
//$pass=$password1->password;
 dd( $pass);

    //$password=Passwords::create (request(array('password'))
      //);
      //$password=($request->input('password'));
      //$pass->utf8_encode_deep($password);
      //dd($request->password);
     // dd($response);

			//$password = Passwords::save();
       //return request()->json($pass, 201);
   			//return response()->json(array('success' => true, 'last_insert_id' => $password1->password), 200);					
		  return Response::json(array('password' => $pass), 200);
			      ///return view('sharePass',compact('pass'));
		
		}
		public function store(Request $request)
    {
      $pass="ilnk";
        $this->validate(request(), [
            'password' => 'required|min:2'    
        ]);
        if ($request->has('password')){
          $password=Passwords::create (['password' => encrypt($request['password']) ]);
       $pass=$password->password;
       $id=$password->id;
}else{ $pass="ilnk";
  	}
    //$url1 = action('SharepassController@show',['id' => $password->id]);
          // dd($url1);
    //$password=Passwords::create (['password' => encrypt($request['password']) ]);
       
//$pass=$password->password;
// $password1=Passwords::get(['password']);
 //dd($password1);
//'password' => bcrypt($data['password']),
       return view('sharePass',compact('pass'));
   								

    }
	}
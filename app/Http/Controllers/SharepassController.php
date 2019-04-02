<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Passwords;
use App\pass;
use App\password;

use Hash;
use Response;
class SharepassController extends Controller
{
	public function boot()
{
    Schema::defaultStringLength(191);
}
   public function index()
   	
		{
    	return view('sharePass'); 
		}
		/*public function Get_password(Request $request)
   	
		{
			
		    	$password= bcrypt($request->input('password'));
		//DB::insert('insert into passwords (password) values(?)',[$password]);
		//echo "Record inserted successfully.<br/>";
		//$encriptpassword=DB::table('passwords')->select('password')->get();
		//echo $encriptpassword;
		//$pass = decrypt($password);
	//echo $pass;
		    	$this->validate(request(), [
            'password' => 'required|min:2'    
        ]);

        Passwords::create(
            request(array('password'))
        );
		return view('sharePass',compact('password'));
							
		}*/

public function show(Passwords $request )
{  	
		 $pass="ilnk";
     $dogs = Passwords::orderBy('id', 'desc')->first();
     $pass1= $dogs->password;
    //$password= $request->input('password');
 //$password=Passwords::get ( ['password'] );
   //$lastvalue = $collection->value()->last();    
//$pass=$password1->password;
 dd($pass1);

    //$password=Passwords::create (request(array('password'))
      //);
      //$password=($request->input('password'));
      //$pass->utf8_encode_deep($password);
      //dd($request->password);
     // dd($response);

			//$password = Passwords::save();
       //return request()->json($pass, 201);
   			//return response()->json(array('success' => true, 'last_insert_id' => $password1->password), 200);					
		  //return Response::json(array('password' => $password1->password), 200);
			       return view('sharePass',compact('pass'));
		
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
}else{ $pass="ilnk";
  	}
    //$password=Passwords::create (['password' => encrypt($request['password']) ]);
       
//$pass=$password->password;
// $password1=Passwords::get(['password']);
 //dd($password1);
//'password' => bcrypt($data['password']),
       return view('sharePass',compact('pass'));
   								

    }
	}
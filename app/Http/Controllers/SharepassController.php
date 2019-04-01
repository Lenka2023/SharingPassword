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

public function show(Request $request )
   	
		{//$password= $request->input('password');
$password1=Passwords::get(array('password'));
$id=Passwords::get(array('id'));

    //$password=Passwords::create (request(array('password'))
      //);
      //$password=($request->input('password'));
      //$pass->utf8_encode_deep($password);
     // dd($password1);
			//$password = Passwords::save();
       //return request()->json($pass, 201);
   			//return response()->json(array('success' => true, 'last_insert_id' => $password1->password), 200);					
		  //return Response::json(array('success' => true), 200);
			return view('sharePass'); 				
		}
		public function store(Request $request)
    {
        $this->validate(request(), [
            'password' => 'required|min:2'    
        ]);
        if ($request->has('password')){
          $password="password";
//$password[]= bcrypt($request->input('password'));
}else{$password="ilnk";
  	}
    //$password=Passwords::create (['password'          => $request['password'] ]);
    $password=Passwords::create (['password'          => Hash::make($request['password']) ]);
       //$password=Passwords::create (request(array('password')));
       //'password'          => Hash::make($request['password'])
        //]);
        //dd($password->password);
 $pass=$password->password;
 //$password1=Passwords::get('password');
 //dd($pass);
//'password' => bcrypt($data['password']),
       return view('sharePass',compact('pass'));
   								

    }
	}
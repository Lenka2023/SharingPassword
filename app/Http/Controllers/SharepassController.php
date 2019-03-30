<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Passwords;
use App\pass;
use App\password;
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
   	
		{
			$pass= $request->input('password');
			if ($request->has('password')){
        return request()->json()->all();
   								}else{
   								return view('sharePass');	
   								}
		    
							
		}
		public function store(Request $request)
    {
        $this->validate(request(), [
            'password' => 'required|min:2'    
        ]);
        if ($request->has('password')){
$password= bcrypt($request->input('password'));
}else{$password="ilnk";
  	}
        Passwords::create (
          request(array('password'))
        );

       return view('sharePass',compact('password'));
   								

    }
	}
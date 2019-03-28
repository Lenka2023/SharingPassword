<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Passwords;
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
			$password= bcrypt($request->input('password'));
			dd($password);
			//$request= Passwords::find($id);
		    return view('sharePass', compact('request'));
							
		}
		public function store()
    {
        $this->validate(request(), [
            'password' => 'required|min:2'    
        ]);

        Passwords::create (
          request(array('password'))
        );

       return view('sharePass',compact('password'));
    }
	}
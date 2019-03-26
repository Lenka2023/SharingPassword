<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\encriptpassword;
class SharepassController extends Controller
{
   public function index()
   	
		{
		    	return view('sharePass'); 
		}
		public function Get_password(Request $request)
   	
		{
			
//for($i=1; $i <= 15; $i++){

		    	$password= bcrypt($request->input('password'));
		DB::insert('insert into passwords (password) values(?)',[$password]);
		echo "Record inserted successfully.<br/>";
		$encriptpassword=DB::table('passwords')->select('password')->get();
		echo $encriptpassword;
		//$pass = decrypt($password);
	//echo $pass;
		return view('sharePass',compact('encriptpassword'));
							
		}
}
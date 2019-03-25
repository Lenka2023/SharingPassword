<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SharepassController extends Controller
{
   public function index()
   	
		{
		    	return view('sharePass'); 
		}
		public function Get_password(Request $request)
   	
		{
for($i=1; $i <= 15; $i++){

		    	$password[$i]= bcrypt($request->input('password'));
		DB::insert('insert into passwords (password) values(?)',[$password[$i]]);
		echo "Record inserted successfully.<br/>";
		$encriptpassword[$i]=DB::table('passwords')->select('password')->get();
		echo $encriptpassword[$i];
		$pass[$i] = decrypt($encriptpassword[$i]);
		return view('sharePass',compact('encriptpassword[$i]'));
							}
		}
}
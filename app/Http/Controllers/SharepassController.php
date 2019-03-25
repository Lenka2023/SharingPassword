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
		    	$password= $request->input('password');
		DB::insert('insert into passwords (password) values(?)',[$password]);
		echo "Record inserted successfully.<br/>";
		
		}
}
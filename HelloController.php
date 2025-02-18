<?php

namespace App\Http\Controllers;
use App\Models\new_users;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function greet() {
    	return view('hello',compact('users'));
    }
    
    public function test(Request $request) {
        $name = $request->input('name');
        $pass = $request->input('password');
        try {
		    $user = new new_users();
		    $user->username = $name;
		    $user->pass = $pass;
		    $user->save();

		    $data ="Data inserted successfully!";
		} catch (\Exception $e) {
			$data ="username already exist";
		    return "Error: " . $e->getMessage();
		}
		finally{
			//$users = $this->getAllUsers();
            $users = new_users::all(); 
	        return view('hello',compact('data','users'));			
		}

	}
    public function deleteUserByName(Request $request)
	{
		
		$name = $request->input('name');
	    $user = new_users::where('username', $name)->first();  // Find the user by name
	    if ($user) {
	        $user->delete();
	        //$users = $this->getAllUsers(); 
            $users = new_users::all(); 
	        $data = "User with name $name deleted successfully!";
	        return view('hello',compact('data','users'));
	    } else {
	    	//$users = $this->getAllUsers(); 
            $users = new_users::all(); 
	        $data = "User with name $name not found!";
	        return view('hello',compact('data','users'));
	    }
	}	
    public function updateUser(Request $request)
	{
	     
		$name = $request->input('name');
		$pass = $request->input('password');

	    $user = new_users::where('username', $name)->first();  // Find the user by name
	    if ($user) {
	        $user->pass = $pass;  // Update the password
	        $user->save();  // Save the changes
	        $data ="User password updated successfully!";
	        //$users = $this->getAllUsers();
            $users = new_users::all();
	        return view('hello',compact('data','users'));
	    } else {
	        $data ="User not found!";
	       // $users = $this->getAllUsers();
           $users = new_users::all();
	        return view('hello',compact('data','users'));
	    }
	}
}



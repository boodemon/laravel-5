<?php namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller;
use App\Http\Requests\Admins\LoginRequest;


class LoginController extends Controller {
	
	public function getIndex(){
		if(Auth::check()){
			return redirect('/admin/index');
		}else{
			return view('admin.login');
		}
	}
	public function postProcess(LoginRequest $request){
		$username = $request->input('username');
		$password = $request->input('password');
		//echo '[Username : '. $username .'][Password : '. $password .']';
		
		if(Auth::attempt(['username' => $username,'password'=>$password,'type'=>'admin'],$request->has('remember'))){
			return redirect()->intended('/admin/index');
		}else{
			return redirect()->back()->with('message',"Error!! Username or Password Incorrect. \nPlease try again.");;
		}
	}
	
	public function getLogout(){
		Auth::logout();
		return redirect('/admin/login');
	}
}
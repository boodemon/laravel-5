<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use App\Models\Users;

class  UserController extends AdminsController {
	public function getIndex(){
		$user = Users::orderBy('username')->get();
		
		return view('admin.user.index',['user'=>$user]);
	}
	
	public function getForm($id = null){
		
		return view('admin.user.form');
	}
	public function postForm(Request $request){
		echo 'POST';
		//echo '<pre>',print($request),'</pre>';
		echo $request->input('email');
	}
}
<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;

class  UserController extends AdminsController {
	public function getIndex(){
		return view('admin.user.index');
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
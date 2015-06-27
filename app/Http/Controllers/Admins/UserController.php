<?php namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class  UserController extends Controller {
	public function index(){
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
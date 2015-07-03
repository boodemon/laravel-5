<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Admins\userRequest;

class  UserController extends AdminsController {
	public function getIndex(){
		$user = Users::orderBy('username')->paginate(50);//->get();
		
		return view('admin.user.index',['user'=>$user]);
	}
	
	public function getForm($id = null){
		if($id != null){
			$user = Users::where('id',$id)->first();
			if(!$user) return redirect('admin/user/form');
		}else{ $user = false;}
		$data = array('id' => $id,'user' => $user);
		return view('admin.user.form',$data);
	}
	
	public function postForm(userRequest $request){
		echo 'POST';
		echo '<pre>',print($request),'</pre>';
		//echo $request->input('email');
	}
}
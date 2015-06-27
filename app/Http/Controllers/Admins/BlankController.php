<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;


class BlankController extends AdminsController {
	public function getIndex(){
		//echo 'get Blank page <br/>';
		return view('admin.blank');
	}
	public function index(){
		echo 'Blank page <br/>';
		//return view('admin.blank');
	}
}
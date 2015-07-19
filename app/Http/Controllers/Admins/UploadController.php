<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use Illuminate\Http\Request;
use App\Models\Images;
use Intervention\Image\ImageManagerStatic as Image;

class UploadController extends AdminsController{
	public function getIndex(){
		$images = Images::get();
		return view('admin.upload.index',['images' => $images]);
	}
	
	public function postAction(Request $request){
		if($request->exists('btn-upload')){
			$file = $request->file('uploader');
			$path = 'images/uploads';
			$filename = $file->getClientOriginalName();
			$file->move('images/uploads',$file->getClientOriginalName());
			$image = new Images;
			$image->image_name = $filename;
			$image->save();
			echo 'Uploaded';
			
		}
		return redirect()->back();
	}
	public function getTestpackage(){
		$img = Image::make('images/uploads/Koala.jpg')->resize(300, 200);
		return $img->response('jpg');
	}
}
<?php namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest {

	public function rules()
	{
		if($this->get('id') == 0){
			return [
				'username' => 'required|min:6|unique:users',
				'password' => 'required|min:8|confirmed',
				'password_confirmation' => 'required',
				'name' => 'required|min:4',
				'email' => 'required|email|unique:users',
			];
		}else{
			return [
				'name' => 'required|min:4',
			];
		}
	}	
	public function messages()
	{
		return [
			'username.required' => 'Please Enter Username',
			'username.unique' => 'Someone already has this username',
			'password.required' => 'Please Enter Username',
			'password_confirmation.required' => 'Please Enter Confirm Password',
			'name.required' => 'Please Enter Name',
			'email.required' => 'Please Enter Email',
			'email.unique' => 'Someone already has this email address.',
		];
	}
	

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
}

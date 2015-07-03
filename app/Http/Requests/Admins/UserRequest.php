<?php namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest {

	public function rules()
	{
		return [
			'username' => 'required|unique:users',
			'password' => 'required|min:8|confirm',
			'name' => 'required|min:4',
			'email' => 'required|email|unique:users',
		];
	}	
	public function messages()
	{
		return [
			'username' => 'required',
			'password' => 'required',
			'password_confirmation' => 'required',
			'name' => 'required',
			'email' => 'required',
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

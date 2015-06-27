<?php namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

	public function rules()
	{
		return [
            'username' => 'required',
            'password' => 'required'
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

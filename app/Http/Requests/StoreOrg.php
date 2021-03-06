<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Auth;

class StoreOrg extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if( Auth::user()->type == 1 || Auth::user()->type == 3 ) //authorize staff or admin only
        {
          return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      $data = [
          'name' => 'required|max:255|unique:orgs,name,'.\Request::segment(2),
          'image' => 'nullable|max:255',
          'email' => 'nullable|email|max:255',
          'phoneNumber' => 'nullable|numeric|digits_between:10,15',
          'address' => 'nullable|max:255',
          'description' => 'nullable',
      ];

      return $data;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [

        ];
    }
}

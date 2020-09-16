<?php


namespace App\Http\Controllers\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

abstract class ApiRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    protected function failedValidation(Validator $validator)
    {
       throw new HttpRequestException(response()->json($validator->errors(),422));
    }
}

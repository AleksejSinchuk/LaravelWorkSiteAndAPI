<?php


namespace App\Http\Controllers\Requests;


class CompanyRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'id',
            'description' => 'string',
            'location' => 'string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'site' => 'required|string',
            'name' => 'required|string',
        ];
    }
        public function messades(){
            return [
                'description.string'=>'Description should be string',
                'location.string'=>'Location should be string',
                'phone.required'=>'Phone is required!',
                'email.required'=>'Email is required!',
                'site.required'=>'Site is required!',
                'name.required'=>'Name is required!',
            ];
        }

}

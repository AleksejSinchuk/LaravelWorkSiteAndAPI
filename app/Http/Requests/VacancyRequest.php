<?php


namespace App\Http\Requests;
use App\Http\Requests\ApiRequest;

class VacancyRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'id_category'=> 'int',
            'id_company'=> 'int',
            'description'=> 'string',
            'date'=> 'date'

        ];
    }
    public function messages(){
        return [
            'description.string'=>'Description should be string',
            'id_category.int'=>'id_category should be int',
            'id_company.int'=>'id_company should be int',
            'date.date'=>'Date should be date',

        ];
    }
}

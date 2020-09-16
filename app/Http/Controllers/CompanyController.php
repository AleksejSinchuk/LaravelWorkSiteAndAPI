<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Requests\CompanyRequest;

class CompanyController extends ApiControllers
{
    public function __construct(CompanyModel $model,CompanyRequest $request)
    {
        $this->model=$model;
        $this->request=$request;
    }
}

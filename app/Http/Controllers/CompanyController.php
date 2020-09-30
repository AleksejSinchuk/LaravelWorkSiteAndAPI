<?php


namespace App\Http\Controllers;

use App\CompanyModel;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends ApiControllers
{

    public function __construct(CompanyModel $model,CompanyRequest $request)
    {
        $this->request=$request;
        $this->model=$model;
    }
}

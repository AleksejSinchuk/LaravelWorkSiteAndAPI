<?php


namespace App\Http\Controllers;


use App\Http\Requests\VacancyRequest;
use App\VacancyModel;

class VacancyController extends ApiControllers
{
    public function __construct(VacancyModel $model,VacancyRequest $request)
    {
        $this->request=$request;
        $this->model=$model;
    }
}

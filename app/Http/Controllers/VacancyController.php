<?php


namespace App\Http\Controllers;


class VacancyController extends ApiControllers
{
    public function __construct(VacancyModel $model,VacancyController $request)
    {
        $this->model=$model;
        $this->request=$request;
    }
}

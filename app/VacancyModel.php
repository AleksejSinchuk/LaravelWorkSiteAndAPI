<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VacancyModel extends Model
{
    protected $table='vacancies';

    protected $fillable=[
        'id',
        'id_category',
        'id_company',
        'description',
        'date'
     ];
}

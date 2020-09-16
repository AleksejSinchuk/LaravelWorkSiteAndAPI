<?php


namespace App;


class CompanyModel extends Model
{
    protected $table='companies';

    protected $fillable=[
        'id',
        'description',
        'location',
        'phone',
        'email',
        'site',
        'name',
    ];


}

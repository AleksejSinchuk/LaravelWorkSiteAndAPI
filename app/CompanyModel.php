<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $table='companies';
   public $timestamps = false;

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

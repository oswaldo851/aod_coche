<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    

    protected $fillable = [
        'brand', 'model', 'color', 'serialNumber', 'carRegistration', 'numberOfDoors', 'numberOfSeats', 'mileage', 'cylinderCapacity', 'description', 'comment', 'available'
    ];
}

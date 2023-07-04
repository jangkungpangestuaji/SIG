<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Location extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'location';

    protected $fillable = [
        'id',
        'location_title',
        'coords_lat',
        'coords_lng',
        'number',
        'city',
        'country',
    ];
}

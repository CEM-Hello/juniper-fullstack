<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = [
    'fname', 'lname', 'email', 'phone_number', 'date', 'time', 'guests_total', 'seating'
  ];
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function allClubMembers() {
    return view('admin/customers/club-members');
  }

  public function allReservations(){
      return view('admin/customers/reservations');
  }
}

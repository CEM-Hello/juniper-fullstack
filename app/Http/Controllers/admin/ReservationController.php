<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $reservations = Reservation::paginate(10);

        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }
    public function create(){
        return view('admin/reservations/create');
    }
    public function store(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'seating' => ['string'],
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('date');
        $reservation->time = request('time');
        $reservation->guests_total = request('guests_total');
        $reservation->seating = request('seating');
        $reservation->save();

       
        return redirect('/admin/reservations');
    }
    public function edit($id){
        $reservation = Reservation::find($id);
        
        return view('admin/reservations/edit', [
            'reservation' => $reservation
        ]);
    }
    public function update($id){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'seating' => ['string'],
        ]);
        
        $reservation = Reservation::find($id);
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('date');
        $reservation->time = request('time');
        $reservation->guests_total = request('guests_total');
        $reservation->seating = request('seating');
        $reservation->save();

        return redirect('/admin/reservations');

    }
    public function delete($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }
}

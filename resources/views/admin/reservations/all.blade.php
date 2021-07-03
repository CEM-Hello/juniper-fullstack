@extends('layouts.admin')

@section('content')
  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">Reservations </h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">All Reservations</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader -->
      <!-- ============================================================== -->
     
          <div class="row">
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <div class="card">
                      <h5 class="card-header">Reservations</h5>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col"># of Guests</th>
                                    <th scope="col">Seating</th>
                                    <th scope="col">Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <th scope="row">{{$reservation->id}}</th>
                                    <td>{{$reservation->fname}} {{$reservation->lname}}</td>
                                    <td>{{$reservation->email}}</td>
                                    <td>{{$reservation->phone_number}}</td>
                                    <td>{{date('m/d/Y', strtotime($reservation->date))}}</td>
                                    <td>{{$reservation->time}}</td>
                                    <td>{{$reservation->guests_total}}</td>
                                    <td>{{$reservation->seating}}</td>
                                    <td>
                                        
                                        <a href="#" onclick="event.preventDefault();
                document.getElementById('delete-reservation-{{$reservation->id}}').submit();">
                    <i class="far fa-trash-alt"></i>
                </a>
                <form id="delete-reservation-{{$reservation->id}}" action="/admin/reservations/{{$reservation->id}}/delete" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>

                                    </td>
                                </tr>    
                            @endforeach
                              </tbody>
                          </table>
                          {{ $reservations->links() }}
                      </div>
                  </div>
              </div>
          </div>
@endsection
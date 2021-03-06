@extends('layouts.admin')

@section('content')
  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">Club Members </h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Club Members</li>
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
                      <h5 class="card-header">All Club Members</h5>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($members as $member)
                                <tr>
                                    <th scope="row">{{$member->id}}</th>
                                    <td>{{$member->fname}} {{$member->lname}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->phone_number}}</td>
                                    <td>{{date('m/d/Y', strtotime($member->updated_at))}}</td>
                                    
                                    <td>
                                        
                                        <a href="#" onclick="event.preventDefault();
                document.getElementById('delete-member-{{$member->id}}').submit();">
                    <i class="far fa-trash-alt"></i>
                </a>
                <form id="delete-member-{{$member->id}}" action="/admin/members/{{$member->id}}/delete" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>

                                    </td>
                                </tr>    
                            @endforeach
                              </tbody>
                          </table>
                          {{ $members->links() }}
                      </div>
                  </div>
              </div>
          </div>
@endsection
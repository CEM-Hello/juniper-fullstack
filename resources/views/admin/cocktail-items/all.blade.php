@extends('layouts.admin')

@section('content')
  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">Cocktail Items </h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">All Cocktail Items</li>
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
                      <h5 class="card-header">All Cocktail Items</h5>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Date Created</th>
                                      <th scope="col">Edit</th>
                                      <th scope="col">Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}} </td>
                                    <td>{{$item->price}} </td>
                                    <td>{{date('m/d/Y', strtotime($item->updated_at))}}</td>
                                    <td>
                                        <a href="/admin/cocktail-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a href="#" onclick="event.preventDefault();
                document.getElementById('delete-item-{{$item->id}}').submit();">
                    <i class="far fa-trash-alt"></i>
                </a>
                <form id="delete-item-{{$item->id}}" action="/admin/cocktail-items/{{$item->id}}/delete" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>

                                    </td>
                                </tr>    
                            @endforeach
                              </tbody>
                          </table>
                          {{ $items->links() }}
                      </div>
                  </div>
              </div>
          </div>
@endsection
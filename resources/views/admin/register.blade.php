@extends('layouts.master')


@section('title')
    Registered Roles 
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Registered Roles</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> Name </th>
                <th> Phone </th>
                <th> Email </th>
                <th> Usertype </th>
                <th> EDIT</th>
                <th> DELETE</th>
              </thead>
              <tbody>
               
                <tr>
                  <td> name </td>
                  <td> phone  </td>
                  <td> email </td>
                  <td> usertype  </td>
                  {{-- <td> {{ $row->name }} </td>
                  <td> {{ $row->phone }} </td>
                  <td> {{ $row->email }} </td>
                  <td> {{ $row->usertype }} </td> --}}
                  <td> 
                      <a href="#" class="btn btn-success">EDIT</a>
                </td>
                <td> 
                    <a href="#" class="btn btn-danger">DELETE</a>
              </td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    

@endsection


@section('scripts')
    
@endsection
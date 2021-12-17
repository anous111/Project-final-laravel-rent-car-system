@extends('layouts.admin')

@section('content')
<h2 class="page-title">USER DETAILS</h2>	

<div class="row">
        <div class="col-md-12 mb-5" >
       
            <div class="pull-right">
            <a class="btn btn-succes mb-4" style="margin-bottom: 8%; margin-top:8%" href="{{route('create-user')}}"> create new user</a>
            </div>
           
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th> Sr # </th>
            <th> Username </th>
            <th> Email </th>
            <th> Number </th>
            <th> City </th>
            <th style="width:150px;">action</th>

        </tr>
        @foreach ($User as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->number}}  </td>
            <td> {{$data->city}}  </td>
            <td>
                    <form action="{{ route('delete-user') }}" method="GET">

                       <a class="btn btn-info" style="margin-bottom:8%;" href="{{route('show-user')}}">Show </a>

                        <a class="btn btn-primary" style="margin-bottom:8%;">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                </td>
        </tr>
       
        @endforeach
    </table>

  

    @endsection


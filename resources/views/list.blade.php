@extends('welcome')

@section('title','Dealer list')

@section('content')
<div class="row">
    <div class="col-6">
        <a type="button" class="btn btn-success mb-2" href="{{route('dealer.create')}}">+ Create</a>
    </div>
    <div class="col-6">
        <form class="form-inline my-2 my-lg-0 " style="float: right" method="get">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
            value="{{session()->get('search')}}">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>
<h5>Dealer list</h5>
<hr>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Manager Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dealers as $dealer)
    <tr>
        <th>{{$dealer->code }}</th>
        <td>{{$dealer->name}}</td>
        <td>{{$dealer->phone}}</td>
        <td>{{$dealer->email}}</td>
        <td>{{$dealer->address}}</td>
        <td>{{$dealer->manager_name}}</td>
        <td>{{$dealer->status->name}}</td>
        <td width="180px">
            <a type="button" class="btn btn-success" href="{{route('dealer.edit',$dealer->id)}}">Edit</a>
            <a onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" href="{{route('dealer.delete',$dealer->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection

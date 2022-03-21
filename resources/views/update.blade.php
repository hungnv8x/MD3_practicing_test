@extends('welcome')
@section('title','Update dealer')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Code</label>
                    <input name="code" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{$dealer->code}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           value="{{$dealer->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputPassword1"
                           value="{{$dealer->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           value="{{$dealer->email}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$dealer->address}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Manager name</label>
                    <input name="manager_name" type="text" class="form-control" id="exampleInputPassword1"
                           value="{{$dealer->manager_name}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Status</label><br>
                    <select name="status_id">
                        @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button style="float: right" type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection

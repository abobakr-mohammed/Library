@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Edit Reader</div>
<div class=" panel panel-body">
        @if ( Session()-> has('updated') )
             <div class="alert alert-success">
                   {{ Session() ->get('updated') }}
              </div>
        @endif
   <form action="{{route('update.readers',$reader->id)}}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" value="{{ $reader->name }}">
        </div>

        <div class="form-group" >
          <label> User Name </label>
          <input type="text" class="form-control" name = "username" value="{{ $reader->username }}">
        </div>
       
        <div class="form-group" >
          <label> Email </label>
          <input type="text" class="form-control" name = "email" value="{{ $reader->email }}">
        </div>

        <div class="form-group" >
          <label> Password </label>
          <input type="text" class="form-control" name = "password" value="{{ $reader->password }}">
        </div>

        <br>
        <button type="submit" name="submit"class="btn btn-primary">Update</button>

    </form>
   </div>
</div>
</div>

@stop
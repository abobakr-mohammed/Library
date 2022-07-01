@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Create Reader</div>
<div class=" panel panel-body">
        @if ( Session()-> has('success') )
             <div class="alert alert-success">
                   {{ Session() ->get('success') }}
              </div>
        @endif
                                                     <!--to upload images to the server-->
   <form action="{{ route('store.readers') }}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" value="{{old('name')}}">
            @error('name')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group" >
          <label> User Name </label>
          <input type="text" class="form-control" name = "username" value="{{old('username')}}">
            @error('username')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
       
        <div class="form-group" >
          <label> Email </label>
          <input type="email" class="form-control" name = "email" value="{{old('email')}}">
            @error('email')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group" >
          <label> Password </label>
          <input type="password" class="form-control" name = "password" value="{{old('password')}}">
            @error('password')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        
        <br>
        <button type="submit" name="submit"class="btn btn-primary">Create</button>
    </form>
   </div>
</div>
</div>
@endsection

@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Edit Category</div>
<div class=" panel panel-body">
        @if ( Session()-> has('success') )
             <div class="alert alert-success">
                   {{ Session() ->get('success') }}
              </div>
        @endif
   <form action="{{route('update.category')}}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" value="{{ $categories->name }}">
        </div>

        <div class="form-group" >
          <img src="/images/categories/{{ $categories->image }}" width="150" height="150">
          <input type="file" class="form-control" name = "image">
        </div>

     <button type="submit" class="btn btn-primary" >update</button>
   </form>
   </div>
</div>
</div>
@stop
@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Create Category</div>
<div class=" panel panel-body">
        @if ( Session()-> has('success') )
             <div class="alert alert-success">
                   {{ Session() ->get('success') }}
              </div>
        @endif
   <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" placeholder="Enter Category Name" autocomplete="off">
            @error('name')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <label>Image</label>
            <input type="file" class="form-control" name="image">
             @error('image')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
             <button type="submit" name="submit"class="btn btn-primary">Create</button>
    </form>
   </div>
</div>
</div>
@endsection

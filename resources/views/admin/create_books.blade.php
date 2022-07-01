@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Create Book</div>
<div class=" panel panel-body">
        @if ( Session()-> has('success') )
             <div class="alert alert-success">
                   {{ Session() ->get('success') }}
              </div>
        @endif
                                                     <!--to upload images to the server-->
   <form action="{{route('store.book')}}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" value="{{old('name')}}">
            @error('name')
                 <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
       

        <div class="form-group" >
           <label> Select Category </label>
           <select name="category" class="form-control">
              <option></option>
              @foreach($categories as $category)
                     <option   value="{{ $category['id'] }}"> {{$category['name'] }} </option>
              @endforeach
            </select>
             @error('category')
                 <strong class="text-danger">{{ $message }}</strong>
             @enderror
        </div> 

        <div class="form-group" >
            <label>Discription</label>
            <input type="text" class="form-control" name = "discription" value = "{{old('discription')}}">
            @error('discription')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group" >
            <label for="upload_file"> Upload_File </label>
            <input type="file" class="form-control" name = "upload_file" id="upload_file" value = "{{old('upload_file')}}">
        </div>
        @error('upload_file')
            <strong class="text-danger">{{ $message }}</strong>
        @enderror

        <div class="form-group" >
            <label> Image </label>
            <input type="file" class="form-control" name = "image"  value = "{{old('image')}}">
        </div>
        @error('image')
            <strong class="text-danger">{{ $message }}</strong>
        @enderror
        <br>
        <button type="submit" name="submit"class="btn btn-primary">Create</button>
    </form>
   </div>
</div>

@endsection

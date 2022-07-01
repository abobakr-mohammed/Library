@extends('admin.layout.master')
@section('content')

<div class="panel panel-defult">
<div class="panel-heading"> Edit Book</div>
<div class=" panel panel-body">
        @if ( Session()-> has('updated') )
             <div class="alert alert-success">
                   {{ Session() ->get('updated') }}
              </div>
        @endif
   <form action="{{route('change.book',$book->id)}}" method="POST" enctype="multipart/form-data">
      @csrf

       <div class="form-group" >
          <label> Name </label>
          <input type="text" class="form-control" name = "name" value="{{ $book->name }}">
        </div>
       
        <div class="form-group" >
           <label> Select Category </label>
           <select name="category" class="form-control">
              <option></option>
              @foreach($categories as $category)
                     <option   value="{{ $category->id }}"
                     @if($book->category_id == $category->id) selected @endif
                     > {{$category->name}} </option>
              @endforeach
            </select>
        </div>

        <div class="form-group" >
            <label>Discription</label>
            <input type="text" class="form-control" name = "discription" value="{{ $book->discription }}">
        </div>

        <div class="form-group" >
         {{ $book->upload_file }}
         <a href="{{ route('read.book',$book->id) }}">read book</a>  
        <input type="file" class="form-control" name = "upload_file"  value="/files/{{ $book->upload_file }}">
          
    </div>

        <div class="form-group" >
            <img src="/images/books/{{ $book->image }}">
            <input type="file" class="form-control" name = "image">

        </div>
        <br>
        <button type="submit" name="submit"class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</div>
@stop
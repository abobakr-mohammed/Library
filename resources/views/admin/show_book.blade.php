@extends('admin.layout.master')
@section('content')

<div class="panel panel-defualt">
    <div class="panel-heading">
        <h4> Show Books </h4>
    </div>
    <div class="panel body">
      @if(Session()->has('deleted'))
      <div class="alert alert-success">
        {{ Session()->get('deleted') }}
      </div>
      @endif
      @if(Session()->has('updated'))
      <div class="alert alert-success">
        {{ Session()->get('updated') }}
      </div>
        
      @endif
      @if (isset($books) && $books->count() > 0)
          
         <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Discription</th>
                  <th>Image</th>
                  <th class="text-center">Operations</th>
              </tr>
          </thead>
          <tbody>
            @foreach($books as $book)
              <tr>
                  <td>{{ $book->name }}</td>
                  <td>{{ $book->discription }}</td>
                  <td> <img width="60" height="60" src="/images/books/{{ $book->image  }}"> </td>
                  <td class="text-center"> 
                          <a href="{{ route('edit.book',$book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{ route('delete.book',$book->id) }}" class="btn btn-danger btn-sm">Delete</a>
                       </td>
              </tr>
            @endforeach

          </tbody>
        </table>

      @else
          <div class="alert alert-danger">
            <h4 style="text-center"> there is no books.</h4>
          </div>
      @endif
        
    </div>
</div>
</div>

@stop
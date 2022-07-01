@extends('admin.layout.master')
@section('content')

<div class="panel panel-defualt">
    <div class="panel-heading">
        <h4> Show Readers </h4>
    </div>
    <div class="panel body">
      @if(Session()->has('deleted'))
      <div class="alert alert-success">
        {{ Session()->get('deleted') }}
      </div>
        
      @endif
      @if (isset($readers) && $readers->count() > 0)
          
         <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th class="text-center">Operations</th>
              </tr>
          </thead>
          <tbody>
            @foreach($readers as $reader)
              <tr>
                  <td>{{ $reader->name }}</td>
                  <td>{{ $reader->username }}</td>
                  <td>{{ $reader->email }}</td>
                  <td>{{ $reader->password }}</td>
                  <td class="text-center"> 
                          <a href="{{route('edit.readers',$reader->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{route('delete.readers',$reader->id)}}" class="btn btn-danger btn-sm">Delete</a>
                          <a href="{{ route('reader.books',$reader->id) }}" class="btn btn-success btn-sm">Show Books</a>

                       </td>
              </tr>
            @endforeach

          </tbody>
        </table>

      @else
          <div class="alert alert-danger">
            <h4 style="text-center"> there is no readers .</h4>
          </div>
      @endif
        
    </div>
</div>
</div>
@stop
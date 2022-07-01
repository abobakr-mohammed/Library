@extends('admin.layout.master')
@section('content')

<div class="panel panel-defualt">
    <div class="panel-heading">
        <h4> Show Categories </h4>
    </div>
    <div class="panel body">
      @if(Session()->has('deleted'))
      <div class="alert alert-success">
        {{ Session()->get('deleted') }}
      </div>
        
      @endif
      @if (isset($categories) && $categories->count() > 0)
          
         <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th class="text-center">Operations</th>
              </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                  <td>{{ $category->name }}</td>
                  <td> <img width="60" height="60" src="/images/categories/{{ $category->image  }}"> </td>
                  <td class="text-center"> 
                          <a href="{{ route('edit.category',$category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{ route('delete.category',$category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                          <a href="{{ route('category.books',$category->id) }}" class="btn btn-success btn-sm">Show Books</a>

                       </td>
              </tr>
            @endforeach

          </tbody>
        </table>

      @else
          <div class="alert alert-danger">
            <h4 style="text-center"> there is no Categories.</h4>
          </div>
      @endif
        
    </div>
</div>
</div>


@stop
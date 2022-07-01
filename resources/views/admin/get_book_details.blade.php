@extends('admin.layout.master')
@section('content')

<div class="panel panel-defualt">
    <div class="panel-heading">
        <h4> Show Book Details </h4>
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
                  <th>Category</th>
                  <th>Image</th>
              </tr>
          </thead>
          <tbody>
           
              <tr>
                <td> {{ $books['name'] }}</td>
                <td> {{ $books['discription'] }} </td>
                <td> {{ $category_name }}</td>
                <td> {{ $books['image'] }} </td>
                
              </tr>
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
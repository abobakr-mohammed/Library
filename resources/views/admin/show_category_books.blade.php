@extends('admin.layout.master')
@section('content')

@if (isset($books) && $books->count() > 0)
    <div class="class panel panel-defulat">
    <div class="class panel-heading"> <h4> Show All Books </h4></div>
        <div class="class panel panel-body">
            <table class="table table-borderedS">
                <thead>
                    <tr>
                    <th>name</th>
                    <th>Discription</th>
                    <th>image</th>
                    <th class="text-align:center"> Operations</th>
                    </tr>
                </thead>
                <tbody>
                @if (Session()-> has('deleted'))
                    <div class="alert alert-info">
                        {{ Session()->get('deleted')}}
                    </div>                    
                @endif
                @foreach ($books as $book)
                <tr>
                <td> {{ $book['name'] }} </td>
                <td> {{ $book['discription'] }} </td>
                <td> <img height="60" width="60" 
                        src ="/images/books/{{ $book['image'] }}"> </td>
                        <td class="text-align:center"> 
                            <a href="{{ route('edit.book',$book['id']) }}" class="btn btn-primary btn-sm">edit</a>
                            <a href="{{ route('delete.book',$book['id']) }}" class="btn btn-danger btn-sm">delete</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table> 
    </div>
</div>

@else
       <div style="text-align: center" class="alert alert-danger">
           <h4>There is no Books for this Category</h4>
       </div>
@endif
</div>
@stop
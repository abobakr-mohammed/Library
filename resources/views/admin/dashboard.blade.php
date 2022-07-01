@extends('admin.layout.master')
@section('content')

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="text" id="search" class="form-control" placeholder="search..">
<div class="result"></div>
</div>
@stop
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){

       $('#search').keyup(function(){
           var key = $(this).val();
           if(key != ''){
               //Ajax Script 
               $.ajax({
                   url: "{{ route('search.book') }}",
                   method: 'POST',
                   data: {
                           '_token' : "{{ csrf_token() }}",
                           'key'    : $(this).val()
                         },
                   success: function(response){
                       $('.result').show();
                       $('.result').html(response);
                  }
               });
           }else{
               $('.result').hide();
           }
       });
   });

</script>

@extends('layouts.main')
@section('section')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Paginate Table</h4>
            {{-- <p class="card-description"> Add class <code>.table</code> --}}
            </p>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3 "> 
                    <input type="text" id="search" class="form-control bg-dark text-white" placeholder="Search" /> 
                </div>
            </div>
            <div class="table-responsive" id="table_data">
              @include('pages.paginate.fetch_paginate')
            </div>
          </div>
        </div>
      </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
});
function fetch_data(page){
  $.ajax({
   url:"{{ route('list_paginate') }}"+"?page="+page,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
}

$('#search').keyup(function(){
    var search = $(this).val();
    $.ajax({
        url:"{{ route('list_paginate') }}"+"?search="+search,
        success:function(data)
        {
            $('#table_data').html(data);
        }
    });
});
</script>
@endsection


@extends('Admin.Admin_master')
@section('admin')



<div class="">




    <div class=' d-flex justify-content-between '>
                        <div class="d-flex">

                        </div>
                        <div>
                        <a  href="{{route('create.expanse')}}" class="btn btn-primary" >Create Expanse Head</a>
                        </div>
                        </div>
    <div class="" style="background-color:white; ">







                <div class=''>
                            All expanse
                        </div>
                    <div class="">

                    <table class="table mt-4" id="example"  >
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Expanse </th>
      <th scope="col">Expanse Head</th>
      <th scope="col">Amount</th>
      <th scope="col">Comments</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($expanses as $expanse)
   <tr>
    @php($i=1)

    <th>{{$i++}}</th>
    <td>{{$expanse->exp_name}}</td>
    <td>{{$expanse->exp_head}}</td>
    <td>{{$expanse->amount}}</td>
    <td>{{$expanse->exp_textArea}}</td>

    <td>{{Carbon\Carbon::parse($expanse->created_at)->diffForHumans()}}</td>
    <td>
        <a href="{{url('expanse/edit/'.$expanse->id)}}" class="btn btn-info">Edit</a>
        <a href="{{ url('expanse/delete/'.$expanse->id) }}" class="btn btn-info">Delete</a>



    </td>
   </tr>
   @endforeach



</table>
</div>

    </div>






@endsection

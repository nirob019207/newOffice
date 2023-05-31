

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">

    <div class=' d-flex justify-content-between '>
                        <div>

                        </div>
                        <div>
                        <a  class="btn btn-success" href="{{route('create.income.head')}}">Create Income</a>
                        </div>
                        </div>
    <div class=" mt-4">







                <div class=''>
                            All Income Head
                        </div>
                    <div class="">

                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Income Code</th>
      <th scope="col">Income Head</th>
      <th scope="col">Created_At</th>
      <th scope="col">
        Action
      </th>

    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($incomes as $income)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$income->income_head}}</td>
        <td>{{Carbon\Carbon::parse($income->created_at)->diffForHumans()}}</td>
        <td>
            <a href="{{url('income/edit/head/'.$income->id)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/income/head/delete/'.$income->id)}}" class="btn btn-info">Delete</a>
        </td>

      </tr>
    @endforeach
  </tbody>
</table>

</div>
        </div>
    </div>

@endsection



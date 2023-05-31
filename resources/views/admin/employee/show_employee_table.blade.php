

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">


    <div class=' d-flex justify-content-between '>
                        <div>

                        </div>
                        <div>
                        <a  href="{{route('employee.head')}}" class="btn btn-primary" > Create Duty Table</a>
                        </div>
                        </div>


    <div class=" mt-4">







                <div class=' text-center text-black mt-4 mb-4 text-4xl'>

                        All employee information
                        </div>

                    <div class="">

                    <table class="table" id="example">
  <thead>
    <tr>
       <th scope="col">Sl No</th>
      <th scope="col">Employee Name</th>
      <th scope="col"> Place</th>
      <th scope="col">Date of duty</th>
      <th scope="col">Amount</th>
      <th scope="col">Create_at</th>

      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($employees as $employee)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$employee->emp_name}}</td>
        <td>{{$employee->emp_place}}</td>
        <td>{{$employee->emp_join}}</td>
        <td>{{$employee->emp_amount}}</td>
         <td>{{Carbon\Carbon::parse($employee->created_at)->diffForHumans()}}</td>
        <td>
            <a href="{{url('employee/edit/'.$employee->id)}}" class="btn btn-info">Edit</a>
            <a href="{{url('employee/delete/'.$employee->id)}}" class="btn btn-danger">Delete</a>
        </td>

      </tr>
    @endforeach
  </tbody>
</table>

</div>
        </div>
    </div>


@endsection



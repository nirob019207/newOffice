





@extends('Admin.Admin_master')
@section('admin')









<div class="py-12">
    <div class="container">




    @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="text-center mt-4 mb-4 text-4xl text-black">
    <h1>Employee details Edit</h1>
</div>
<form action="{{ url('employee/update/'.$employees->id)}}" method="POST">
    @csrf

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label class="text-white">Employee Name</label>
            <input
                type="text"
                class="form-input focus:bg-black focus:text-white w-full text-black"
                name="emp_name"
                value="{{$employees->emp_name}}"
            />
        </div>

        <div class="mb-4">
            <label class="text-black">Place</label>
            <input
                type="text"
                class="form-input focus:bg-black focus:text-white w-full text-black"
                name="emp_place"
                value="{{$employees->emp_place}}"
            />
        </div>

        <div class="mb-4">
            <label class="text-black">Join Date</label>
            <input
                type="text"
                class="form-input focus:bg-black focus:text-white w-full text-black"
                name="emp_join"
                value="{{$employees->emp_join}}"
            />
        </div>

        <div class="mb-4">
            <label class="text-black">Employee Amount</label>
            <input
                type="text"
                class="form-input focus:bg-black focus:text-white w-full text-black"
                name="emp_amount"
                value="{{$employees->emp_amount}}"
            />
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </div>
</form>





        </div>
    </div>

@endsection

































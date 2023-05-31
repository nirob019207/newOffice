



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

<form action="{{ route('store.income') }}" method="POST" class="bg-white text-black rounded-lg shadow-lg p-6">
    @csrf
    <div>
        <h1 class="flex justify-center">Create Income</h1>
    </div>
    <div class="mb-4">
        <label class="block mb-2" for="income_name">Income</label>
        <input
            type="text"
            id="income_name"
            name="income_name"
            class="form-input w-full"
        />
    </div>
    <div class="mb-4">
        <label class="block mb-2" for="income_head">Income Head</label>
        <select name="income_head" class="form-select w-full">
            <option value="">Select Head</option>
            @foreach($incomes as $income)
                <option value="{{ $income->income_head }}">{{ $income->income_head }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block mb-2" for="amount">Amount</label>
        <input
            type="text"
            id="amount"
            name="amount"
            class="form-input w-full"
        />
    </div>
    <div class="mb-4">
        <label class="block mb-2" for="income_textArea">Comments</label>
        <textarea name="income_textArea" id="income_textArea" rows="3" class="form-textarea w-full"></textarea>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form>


        </div>
    </div>

@endsection

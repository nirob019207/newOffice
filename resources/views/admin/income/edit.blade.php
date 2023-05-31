@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{ url('income/update/'.$incomes->id)}}" method="POST">
            @csrf
            <div class="col-xxl">
                <div class="card mb-4 bg-white text-black shadow">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label">Income</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            class="form-input w-full focus:bg-black focus:text-white"
                                            name="income_name"
                                            value="{{ $incomes->income_name }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label">Income Head</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            class="form-input w-full focus:bg-black focus:text-white"
                                            name="income_head"
                                            value="{{ $incomes->income_head }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label">Amount</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            class="form-input focus:bg-black w-full focus:text-white"
                                            name="amount"
                                            value="{{ $incomes->amount }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label">Comments</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-merge">
                                        <textarea name="income_textArea" rows="3" class="w-full px-3 py-2 rounded-lg border-2 border-gray-300 focus:outline-none focus:border-indigo-500 focus:bg-black focus:text-white">{{ $incomes->income_textArea }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-end">
                                <div class="col-sm-9">
                                    <button type="submit" class="bg-indigo-500 hover:bg-black text-white px-4 py-2 rounded-lg transition-colors duration-300">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

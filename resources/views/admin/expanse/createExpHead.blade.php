@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
    <div class="container ">
        <div class="m-4 p-4  w mx-auto" style="max-width: 500px;background-color:#7FFFD4;color:black;">
            <h1 class=" text-center">Create Expanse Head</h1>
            <div class="my-3 flex justify-center">
                <form action="{{ route('store.expHead') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exp_head" class="form-label">Expanse Head</label>
                        <input type="text" class="rounded-xl "  id="exp_head" name="exp_head">
                    </div>
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

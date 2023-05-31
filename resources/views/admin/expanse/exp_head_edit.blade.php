@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
    <div class="container ">
        <div class="m-4  w mx-auto" style="max-width: 500px;background-color:#7FFFD4;color:black;">
            <h1 class=" text-center">Update Expanse Head</h1>
            <div class="">
                <form action="{{ url('/expanse/head/update/'.$expHead->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exp_head" class="form-label">Expanse Head</label>

                        <input type="text" class="form-control" id="exp_head" name="exp_head" value="{{ $expHead->exp_head }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

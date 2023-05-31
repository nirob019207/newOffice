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

    <form action="{{route('store.exp')}}" method="POST">
      @csrf

      <div class="col-xxl">
        <div class="mb-4 bg-white text-black p-8 shadow-lg">
            <div class=" flex justify-center text-2xl m-2">
                <h1>Create Expanse</h1>
            </div>
          <div class="">
            <form>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Expanse</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control hover:bg-blue-200 rounded" name="exp_name" />
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Exp Head</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <select class="w-full hover:bg-blue-200 rounded" name="exp_head">
                      <option value="" selected>Select Head</option>
                      @foreach ($expanses as $expanse)
                      <option value="{{ $expanse->exp_head }}">{{ $expanse->exp_head }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Amount</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control hover:bg-blue-200 rounded" name="amount" />
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Comments</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control hover:bg-blue-200 rounded" name="exp_textArea" />
                  </div>
                </div>
              </div>

              <div class="row justify-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-info ml-32 hover:bg-blue-200 rounded">Submit</button>
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

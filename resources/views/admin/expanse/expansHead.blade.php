@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
    <div class="container">

        <div class="flex justify-between mb-4">
            <div class="flex">

            </div>
            <div>
                <a class="btn btn-success" href="{{ route('create.expanse.head') }}">Create Expanse Head</a>
            </div>
        </div>

        <div class=" mt-4">
            <div class="">
                All Expanse Head
            </div>
            <div class="">
                <table class="w-full text-sm text-left text-white-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-4 px-8">
                                Expanse Code
                            </th>
                            <th scope="col" class="py-4 px-8">
                                Expanse Head
                            </th>
                            <th scope="col" class="py-4 px-8">
                                Created At
                            </th>
                            <th scope="col"class="py-4 px-8">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expHeads as $exp_head)
                            <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-40">
                                <td class="py-4 px-8">{{ $exp_head->id }}</td>
                                <td class="py-4 px-8">{{ $exp_head->exp_head }}</td>
                                <td class="py-4 px-8">{{ $exp_head->created_at }}</td>
                                <td>
                                    <a href="{{url('expanse/edit/head/'.$exp_head->id)}}" class="btn btn-info">Edit</a>
        <a href="{{url('/expanse/head/delete/'.$exp_head->id)}}" class="btn btn-info">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

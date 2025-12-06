@extends('layouts.master')
@section('title', 'Category')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href='/category/create' class="btn btn-primary">Create</a>
    <table class="table table-striped" style="margin-top: 10px">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href='/category/{{ $category->id }}' class="btn btn-info btn-sm">Detail</a>
                        <a href='/category/{{ $category->id }}/edit' class="btn btn-secondary btn-sm">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100%" style="text-align: center">No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

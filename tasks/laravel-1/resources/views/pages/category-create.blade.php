@extends('layouts.master')
@section('title', isset($category) ? 'Edit Category' : 'Create Category')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3" action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}"
        method="POST">
        @csrf

        @if (isset($category))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="validationDefault01" class="form-label">Name *</label>
            <input type="text" name="name" class="form-control"
                value="{{ old('name', isset($category) ? $category->name : '') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description *</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description', isset($category) ? $category->description : '') }}</textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">{{ isset($category) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
@endsection

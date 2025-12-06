@extends('layouts.master')
@section('title', 'Detail Category')
@section('content')
    <h5>{{ $category->name }}</h5>
    <div>
        <p style="margin: 0;font-weight: bolder;">Description:</p>
        <p>{{ $category->description }}</p>
    </div>
    <a href='/category' class="btn btn-secondary btn-sm my-2">Back</a>
@endsection

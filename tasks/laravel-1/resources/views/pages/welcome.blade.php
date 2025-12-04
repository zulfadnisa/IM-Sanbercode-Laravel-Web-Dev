@extends('layouts.master')
@section('title', 'Welcome')
@section('content')
    <h1>SELAMAT DATANG, {{ $firstname }} {{ $lastname }}!</h1>
    <p>
        Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!
    </p>
@endsection
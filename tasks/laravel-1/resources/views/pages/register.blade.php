@extends('layouts.master')
@section('title', 'Register')
@section('content')
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label>First name <span style="color:red">*</span>:</label><br />
        <input type="text" name="firstname" id="firstname">
        <br /><br />

        <label>Last name <span style="color:red">*</span>:</label><br />
        <input type="text" name="lastname" id="lastname">
        <br><br>

        <label>Gender:</label><br />
        <input type="radio" name="gender" value="male" /> Male<br />
        <input type="radio" name="gender" value="female" /> Female<br />
        <input type="radio" name="gender" value="other" /> Other<br /><br />

        <label>Nationality:</label><br />
        <select name="nationality">
            <option>Indonesian</option>
            <option>Malaysian</option>
            <option>Singaporean</option>
            <option>Other</option>
        </select><br /><br />

        <label>Language Spoken:</label><br />
        <input type="checkbox" name="language" value="Bahasa Indonesia" /> Bahasa
        Indonesia<br />
        <input type="checkbox" name="language" value="English" /> English<br />
        <input type="checkbox" name="language" value="Other" /> Other<br /><br />

        <label>Bio:</label><br />
        <textarea name="bio" cols="30" rows="10"></textarea><br /><br />

        <button type="submit" id="submitBtn" disabled>Sign Up</button>
    </form>

    <script>
        const first = document.getElementById('firstname');
        const last = document.getElementById('lastname');
        const btn = document.getElementById('submitBtn');

        function validate() {
            btn.disabled = !(first.value.trim().length > 0 && last.value.trim().length > 0)
        }

        first.addEventListener('input', validate);
        last.addEventListener('input', validate);
    </script>
@endsection

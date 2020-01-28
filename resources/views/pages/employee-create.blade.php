@extends('layouts.base')

@section('content')

    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" value="">
        <br><br>

        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" value="">
        <br><br>

        <select name="tasks[]" multiple>

            @foreach ($tasks as $task)

                <option value="{{ $task -> id }}">

                    {{ $task -> title}}

                </option>

            @endforeach

        </select>
        <br><br>

        <input type="submit" value="Create">
    </form>

@endsection
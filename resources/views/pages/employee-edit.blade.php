@extends('layouts.base')
@section('content')

  <br>
  <form action="{{ route('employee.update', $employee -> id) }}" method="post">
    @csrf
    @method('POST')

    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" value="{{ $employee -> firstname }}"><br>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="{{ $employee -> lastname }}"><br>

    <select name="tasks[]" multiple>

        @foreach ($tasks as $task)

          <option value="{{ $task -> id }}"

              @if ($employee -> tasks() -> find($task -> id))
                selected
              @endif

            >{{ $task -> title }}</option>

        @endforeach
    </select>

    <br>
    <input type="submit" name="" value="UPDATE">
    <br>

  </form>
  
@endsection

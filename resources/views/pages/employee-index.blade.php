@extends('layouts.base')

@section('content')
    <h1>
        Employees:
    </h1>

    <ul>
        @foreach ($employees as $employee)
        
            <li>
                
                nome: {{$employee -> firstname}}<br>
                cognome: {{$employee -> lastname}}
            <br><br>

            <ul>
               @foreach ($employee -> tasks as $task)
               <li>
               <a href="{{ route('employee.remove.task', [$employee -> id, $task -> id]) }}">X</a>

                    task: {{$task -> title}}
                    
               </li>
               
               @endforeach
               <br>

            </ul>

            <br>

            <a href="{{ route('employee.edit', $employee -> id) }}">EDIT Employee</a><br>

            <a href="{{ route('employee.delete', $employee -> id) }}">DELETE Employee</a>

            <br><br><br>

            </li>

        @endforeach

    </ul>


@endsection

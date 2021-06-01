@extends('layouts.main-layout')

@section('content')
    <h1>
        Employees
    </h1>

    <ul>
        @foreach ($employees as $employee)
            <li>
                <h2>
                    {{ $employee -> firstname }} {{ $employee -> lastname }}
                </h2>

                <h3>
                    Location: {{ $employee -> location -> state }}, {{ $employee -> location -> address }}
                </h3>

                <ul>
                    @foreach ($employee -> tasks as $task)
                        <li>
                            {{ $task -> name }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
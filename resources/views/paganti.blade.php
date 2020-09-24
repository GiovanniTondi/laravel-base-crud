@extends('layouts.main')

@section('content')

    <main>

        <h2>Paganti</h2>
        <ul>
            @foreach ($paganti as $pagante)
                <li>
                    {{ $pagante -> name }}
                    {{ $pagante -> lastname }}
                </li>
            @endforeach
        </ul>
    </main>

@endsection

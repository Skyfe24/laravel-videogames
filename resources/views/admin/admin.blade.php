@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Description</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Serial Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videogames as $videogame)
                    <tr>
                        <th>{{ $videogame->id }}</th>
                        <td>{{ $videogame->title }}</td>
                        <td>{{ $videogame->release_date }}</td>
                        <td>{{ $videogame->genre }}</td>
                        <td>{{ $videogame->cover }}</td>
                        <td>{{ $videogame->description }}</td>
                        <td>{{ $videogame->publisher }}</td>
                        <td>{{ $videogame->serial_number }}</td>
                        <td>{{ $videogame->rating }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

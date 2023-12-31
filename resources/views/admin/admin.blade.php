@extends('layouts.app')
@include('includes.alert')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('admin.videogames.create') }}" class="btn btn-success me-2">Create a new Videogame</a>
        </div>
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
                    <th scope="col">Serial Number</th>
                    <th scope="col">Rating</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videogames as $videogame)
                    <tr>
                        <th>{{ $videogame->id }}</th>
                        <td>{{ $videogame->title }}</td>
                        <td>{{ $videogame->release_date }}</td>
                        <td>{{ $videogame->genres->first() ? $videogame->genres->first()->name : 'N/A' }}</td>

                        <td>{{ substr($videogame->cover, 0, 30) . '...' }}</td>
                        <td>{{ substr($videogame->description, 0, 30) . '...' }}</td>

                        @if ($videogame->publisher)
                            <td>{{ $videogame->publisher->name }}</td>
                        @else
                            <td>-</td>
                        @endif

                        <td>{{ $videogame->serial_number }}</td>
                        <td>{{ $videogame->rating }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.videogames.show', $videogame->id) }}"
                                    class="btn btn-primary me-2">Show</a>
                                <a href="{{ route('admin.videogames.edit', $videogame->id) }}"
                                    class="btn btn-warning me-2">Edit</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                    data-route="videogames" data-id="{{ $videogame->id }}">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

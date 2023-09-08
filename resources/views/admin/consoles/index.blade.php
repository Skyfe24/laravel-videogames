@extends('layouts.app')
@include('includes.alert')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('admin.consoles.create') }}" class="btn btn-success me-2">Create a new console</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Producer</th>
                    <th scope="col">Release</th>
                    <th scope="col">Generation</th>
                    <th scope="col">OS</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consoles as $console)
                    <tr>
                        <th>{{ $console->id }}</th>
                        <td>{{ $console->name }}</td>
                        <td>{{ $console->release_date }}</td>
                        <td>{{ $console->producer }}</td>
                        <td>{{ $console->generation }}</td>
                        <td>{{ $console->OS }}</td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.consoles.show', $console->id) }}"
                                    class="btn btn-primary me-2">Show</a>
                                <a href="{{ route('admin.consoles.edit', $console->id) }}"
                                    class="btn btn-warning me-2">Edit</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                    data-route="consoles" data-id="{{ $console->id }}">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

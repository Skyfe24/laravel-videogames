@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="border rounded mt-3">
            <h1 class="text-center mt-3">{{ $console->title }}</h1>
            <hr class="m-0">
            <div class="row justify-content-around">
                <div class="col-5 d-flex align-items-center">
                    <img src="{{ $console->cover }}" alt="{{ $console->title }}" class="img-fluid ps-4">
                </div>
                <div class="col-7 text-justify mt-3">
                    <ul class="list-group pe-4 pb-4">
                        <li class="list-group-item">
                            <h5>ID</h5>
                            {{ $console->id }}
                        </li>
                        <li class="list-group-item">
                            <h5>Name</h5>
                            {{ $console->name }}
                        </li>
                        <li class="list-group-item">
                            <h5>Release Date</h5>
                            {{ $console->release_date }}
                        </li>
                        <li class="list-group-item">
                            <h5>Producer</h5>
                            {{ $console->producer }}
                        </li>

                        <li class="list-group-item">
                            <h5>Generation</h5>
                            {{ $console->generation }}
                        </li>
                        <li class="list-group-item">
                            <h5>OS</h5>
                            {{ $console->OS }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.consoles.index') }}" class="btn btn-secondary mt-4">Back</a>
    </div>
@endsection

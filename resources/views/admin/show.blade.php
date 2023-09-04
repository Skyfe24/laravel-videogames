@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="border rounded mt-3">
            <h1 class="text-center mt-3">{{ $videogame->title }}</h1>
            <hr class="m-0">
            <div class="row justify-content-around">
                <div class="col-5 d-flex align-items-center">
                    <img src="{{ $videogame->cover }}" alt="{{ $videogame->title }}" class="img-fluid ps-4">
                </div>
                <div class="col-7 text-justify mt-3">
                    <ul class="list-group pe-4 pb-4">
                        <li class="list-group-item">
                            <h5>ID</h5>
                            {{ $videogame->id }}
                        </li>
                        <li class="list-group-item">
                            <h5>Description</h5>
                            {{ $videogame->description }}
                        </li>
                        <li class="list-group-item">
                            <h5>Release Date</h5>
                            {{ $videogame->release_date }}
                        </li>
                        <li class="list-group-item">
                            <h5>Genre</h5>
                            {{ $videogame->genre }}
                        </li>

                        <li class="list-group-item">
                            <h5>Publisher</h5>
                            {{ $videogame->publisher }}
                        </li>
                        <li class="list-group-item">
                            <h5>Avarage Vote</h5>
                            {{ $videogame->rating }}
                        </li>
                        <li class="list-group-item">
                            <h5>Serial Number</h5>
                            {{ $videogame->serial_number }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.videogames.index') }}" class="btn btn-secondary mt-4">Back</a>
    </div>
@endsection

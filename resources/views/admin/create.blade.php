@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-5">
        <form action="{{ route('admin.videogames.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3 col-9">
                    <label for="title" class="form-label">Insert title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3 col-3">
                    <label for="release_date" class="form-label">Insert release date</label>
                    <input type="date" class="form-control" name="release_date" id="release_date">
                </div>
                <div class="mb-3 col-4">
                    <label for="genre" class="form-label">Select Genre</label>
                    <select class="form-control" name="genre" id="genre">
                        <option>Action</option>
                        <option>Rpg</option>
                        <option>Sport</option>
                        <option>FPS</option>
                        <option>Adventure</option>
                        <option>MMO</option>
                        <option>Strategy</option>
                        <option>Racing</option>
                    </select>
                </div>
                <div class="mb-3 col-8">
                    <label for="cover" class="form-label">Insert cover URL</label>
                    <input type="text" class="form-control" name="cover" id="cover" placeholder="es. http://www">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Describe game</label>
                    <textarea type="text" class="form-control" name="description" id="description" rows="10"></textarea>
                </div>

                <div class="mb-3 col-4">
                    <label for="serial_number" class="form-label">Insert serial number</label>
                    <input type="text" class="form-control" name="serial_number" id="serial_number">
                </div>

                <div class="mb-3 col-4">
                    <label for="rating" class="form-label">Vote the game</label>
                    <select class="form-control" name="rating" id="rating">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="mb-3 col-4">
                    <label for="publisher" class="form-label">Insert publisher</label>
                    <input type="text" class="form-control" name="publisher" id="publisher">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

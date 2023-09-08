@extends('layouts.app')
@import '~bootstrap/scss/bootstrap';

@section('content')
  <div class="d-flex justify-content-end mt-3 glass">
    <a class="btn btn-success" href="{{ route('admin.videogames.create') }}">New Videogame</a>
  </div>
  <table class="table  mt-3">
    <thead>
      <tr>
        <th scope="col glass">title</th>
        <th scope="col glass">genre</th>
        <th scope="col glass">cover</th>
        <th scope="col glass">description</th>
        <th scope="col glass">serial_number</th>
        <th scope="col glass">rating</th>
        <th scope="col glass">publisher</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($videogames as $videogame)
        <tr>
          <th>{{ $videogame->title }}</th>
          <td>{{ $videogame->created_at }}</td>
          <td>{{ $videogame->updated_at }}</td>
          <td>
            <div class="d-flex justify-content-end glass">
              <a class="btn btn-success glass" href="{{ route('admin.videogames.show', $videogame) }}">Details</a>
              <a class="btn btn-warning mx-3" href="{{ route('admin.videogames.edit', $videogame) }}">Edit</a>
              <form action="{{ route('admin.videogames.destroy', $videogame) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
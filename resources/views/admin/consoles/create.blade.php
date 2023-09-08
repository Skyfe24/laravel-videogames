@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger position-relative">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="m-3 btn-close top-0 end-0 position-absolute" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </ul>
            </div>
        </div>
    @endif
    <div class="container mt-5">
        @include('includes.form')
    </div>
@endsection

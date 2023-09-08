{{-- form edit --}}
@if ($videogame->exists)
    <form action="{{ route('admin.videogames.update', $videogame) }}" method="POST">
        @method('PUT')
        {{-- form creat --}}
    @else
        <form action="{{ route('admin.videogames.store') }}" method="POST">
@endif


@csrf
<div class="row">
    <div class="mb-3 col-9">
        <label for="title" class="form-label">Insert title</label>
        <input type="text"
            class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
            name="title" id="title" value="{{ old('title', $videogame->title) }}">
        @error('title')
            <div class="invalid-feedback">
                Please provide a valid title.
            </div>
        @enderror
    </div>
    <div class="mb-3 col-3">
        <label for="release_date" class="form-label">Insert release date</label>
        <input type="date"
            class="form-control @error('release_date') is-invalid @elseif(old('release_date')) is-valid @enderror"
            name="release_date" id="release_date" value="{{ old('release_date', $videogame->release_date) }}">
        @error('release_date')
            <div class="invalid-feedback">
                Please provide a valid date.
            </div>
        @enderror
    </div>
    <div class="mb-3 col-4">
        <label for="genre" class="form-label">Select Genre</label>
        <select class="form-control" name="genre" id="genre" value="{{ old('genre', $videogame->genre) }}">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}"
                    {{ in_array($genre->id, old('genres', $videogame->genres->pluck('id')->toArray())) ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-8">
        <label for="cover" class="form-label">Insert cover URL</label>
        <input type="text"
            class="form-control @error('cover') is-invalid @elseif(old('cover')) is-valid @enderror"
            name="cover" id="cover" placeholder="es. http://www" value="{{ old('cover', $videogame->cover) }}">
        @error('cover')
            <div class="invalid-feedback">
                Please provide a valid URL.
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Describe game</label>
        <textarea type="text"
            class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"
            name="description" id="description" rows="10">{{ old('description', $videogame->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">
                Please provide a valid description.
            </div>
        @enderror
    </div>

    <div class="mb-3 col-4">
        <label for="serial_number" class="form-label">Insert serial number</label>
        <input type="text"
            class="form-control @error('serial_number') is-invalid @elseif(old('serial_number')) is-valid @enderror"
            name="serial_number" id="serial_number" value="{{ old('serial_number', $videogame->serial_number) }}">
        @error('serial_number')
            <div class="invalid-feedback">
                Please provide a valid serial number.
            </div>
        @enderror
    </div>

    <div class="mb-3 col-4">
        <label for="rating" class="form-label">Vote the game</label>
        <select class="form-control" name="rating" id="rating" value="{{ old('rating', $videogame->rating) }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

    <div class="mb-3
            col-4">
        <label for="publisher" class="form-label">Insert
            publisher</label>
        <input type="text"
            class="form-control @error('publisher') is-invalid @elseif(old('publisher')) is-valid @enderror "
            name="publisher" id="publisher" value="{{ old('publisher', $videogame->publisher) }}">
        @error('publisher')
            <div class="invalid-feedback">
                Please provide a valid publisher.
            </div>
        @enderror
    </div>

</div>
<a href="{{ route('admin.videogames.index') }}" class="btn btn-secondary">Back</a>
@if ($videogame->exists)
    <button type="submit" class="btn btn-warning">Edit</button>
@else
    <button type="submit" class="btn btn-primary">Submit</button>
@endif
</form>

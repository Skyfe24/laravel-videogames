{{-- form edit --}}
@if ($console->exists)
    <form action="{{ route('admin.consoles.update', $console) }}" method="POST">
        @method('PUT')
        {{-- form creat --}}
    @else
        <form action="{{ route('admin.consoles.store') }}" method="POST">
@endif


@csrf
<div class="row">
    <div class="mb-3 col-9">
        <label for="name" class="form-label">Insert name</label>
        <input type="text"
            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
            name="name" id="name" value="{{ old('name', $console->name) }}">
        @error('name')
            <div class="invalid-feedback">
                Please provide a valid console name.
            </div>
        @enderror
    </div>
    <div class="mb-3 col-3">
        <label for="release_date" class="form-label">Insert release date</label>
        <input type="date"
            class="form-control @error('release_date') is-invalid @elseif(old('release_date')) is-valid @enderror"
            name="release_date" id="release_date" value="{{ old('release_date', $console->release_date) }}">
        @error('release_date')
            <div class="invalid-feedback">
                Please provide a valid date.
            </div>
        @enderror
    </div>

    <div class="mb-3 col-8">
        <label for="producer" class="form-label">Insert Producer Name</label>
        <input type="text"
            class="form-control @error('producer') is-invalid @elseif(old('producer')) is-valid @enderror"
            name="producer" id="producer" value="{{ old('producer', $console->producer) }}">
        @error('producer')
            <div class="invalid-feedback">
                Please provide a valid URL.
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="generation" class="form-label">Name a new Generation</label>
        <textarea type="text"
            class="form-control @error('generation') is-invalid @elseif(old('generation')) is-valid @enderror"
            name="generation" id="generation" rows="10">{{ old('generation', $console->generation) }}</textarea>
        @error('generation')
            <div class="invalid-feedback">
                Please provide a valid generation.
            </div>
        @enderror
    </div>

    <div class="mb-3 col-4">
        <label for="OS" class="form-label">Insert OS name</label>
        <input type="text"
            class="form-control @error('OS') is-invalid @elseif(old('OS')) is-valid @enderror"
            name="OS" id="OS" value="{{ old('OS', $console->OS) }}">
        @error('OS')
            <div class="invalid-feedback">
                Please provide a valid serial number.
            </div>
        @enderror
    </div>

</div>
<a href="{{ route('admin.consoles.index') }}" class="btn btn-secondary">Back</a>
@if ($console->exists)
    <button type="submit" class="btn btn-warning">Edit</button>
@else
    <button type="submit" class="btn btn-primary">Submit</button>
@endif
</form>

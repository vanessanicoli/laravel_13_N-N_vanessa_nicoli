<x-layout>
    
    <x-header title="Crea articolo"/>
    
    <x-display-messages/>
    <x-display-errors/>
    
    <div class="row container-fluid justify-content-center align-items-center flex-grow-1 mb-3">
        <form class="col-12 col-md-6 d-flex flex-column justify-content-center form-custom p-3 p-md-5" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo:</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo dell'articolo:</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore dell'articolo:</label>
                <input type="text" name="author" class="form-control" id="author" value="{{ old('author') }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo dell'articolo:</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ old('body') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine dell'articolo:</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Seleziona tag dell'articolo:</label>
                <div class="row justify-content-center align-items-center border rounded-2 p-2 mx-auto">
                    @foreach ($tags as $tag)
                        <div class="col-4 d-flex justify-content-start align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="{{ $tag->id }}">
                                <label class="form-check-label" for="{{ $tag->id }}">
                                    {{ $tag->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-form mt-4">Crea articolo</button>
            </div>
        </form>
    </div>
    
</x-layout>
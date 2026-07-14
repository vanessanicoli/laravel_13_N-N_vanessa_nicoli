<x-layout>
    
    <x-header title="Modifica articolo"/>
    
    <x-display-messages/>
    <x-display-errors/>
    
    <div class="row container-fluid justify-content-center align-items-center flex-grow-1 mb-3">
        <form class="col-12 col-md-6 d-flex flex-column justify-content-center form-custom p-3 p-md-5" method="POST" action="{{ route('article.update', compact('article')) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo:</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo dell'articolo:</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $article->subtitle }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore dell'articolo:</label>
                <input type="text" name="author" class="form-control" id="author" value="{{ $article->author }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo dell'articolo:</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $article->body }}</textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine attuale:</label>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="ratio ratio-1x1 w-50">
                        <img src="{{ Storage::url($article->img) }}" class="img-fluid object-fit-cover" alt="Immagine dell'articolo {{ $article->title }}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Modifica immagine dell'articolo:</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Seleziona tag dell'articolo:</label>
                <div class="row justify-content-center align-items-center border rounded-2 p-2 mx-auto">
                    @foreach ($tags as $tag)
                    <div class="col-4 d-flex justify-content-start align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="{{ $tag->id }}"  @if ($article->tags->contains($tag)) checked @endif>
                            <label class="form-check-label" for="{{ $tag->id }}">
                                {{ $tag->name }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-form mt-4">Modifica articolo</button>
            </div>
        </form>
    </div>
    
</x-layout>
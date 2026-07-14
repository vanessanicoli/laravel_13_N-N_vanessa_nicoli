<x-layout>
    
    <x-header title="Leggi articolo" />
    
    <x-display-messages/>
    
    <div class="row container justify-content-between my-3 bg-custom p-2 p-md-5">
        
        <div class="col-12 col-md-4 img-container mb-5 mb-md-0">
            <img src="{{ Storage::url($article->img) }}" class="card-img-top img-custom" alt="Immagine dell'articolo {{ $article->title }}">
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <h2 class="display-5 text-uppercase text-center fw-bolder">{{ $article->title }}</h2>
            <h3 class="fs-1 text-uppercase text-center fw-bold">{{ $article->subtitle }}</h3>
            <h4 class="fs-3 fw-medium">Autore: {{ $article->author }}</h4>
            <p class="fs-4">Data: {{ $article->created_at->format('d/m/Y') }}</p>
            <div class="row justify-content-center align-items-center p-2 mx-auto">
                @if ($article->tags->isNotEmpty())                    
                <div class="col-12 col-md-2 d-flex flex-wrap flex-md-nowrap justify-content-center align-items-center mb-2">
                    @foreach ($article->tags as $tag)
                        <span class="badge bg-m text-l me-2 mb-3 mb-md-0">
                            #{{ $tag->name }}
                        </span>
                        @endforeach
                    </div>
                @endif
            </div>
            <p class="fs-5 mt-3">{{ $article->body }}</p>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row gap-5 justify-content-center align-items-center mt-5">
            <a class="btn btn-form" type="button" href="{{ route('article.edit', compact('article')) }}">Modifica</a>
            <button class="btn btn-form" type="button" data-bs-toggle="modal" data-bs-target="#modalDelete-{{ $article->id }}">Elimina</button>
        </div>
    </div>
    
    <x-modal-delete :article="$article"/>

</x-layout>
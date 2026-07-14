<div class="col-12 col-md-4 mb-4 mb-md-0">
    <div class="card card-custom">
        <div class="ratio ratio-1x1">
            <img src="{{ Storage::url($article->img) }}" class="card-img-top img-fluid object-fit-cover" alt="Immagine dell'articolo {{ $article->title }}">
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $article->title }}</h4>
            <h5 class="card-subtitle">{{ $article->subtitle }}</h5>
            <p class="card-text mt-2"> <strong>Autore: </strong> {{ $article->author }} </p>
            <div class="row justify-content-center align-items-center p-2 mx-auto">
                @if ($article->tags->isNotEmpty())                    
                <div class="col-12 d-flex flex-wrap justify-content-center align-items-center mb-2">
                    @foreach ($article->tags as $tag)
                        <span class="badge bg-m text-l me-2 mb-2">
                            #{{ $tag->name }}
                        </span>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('article.show', compact('article')) }}" class="btn btn-card">Leggi</a>
                <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-card">Modifica</a>
                <button class="btn btn-card" type="button" data-bs-toggle="modal" data-bs-target="#modalDelete-{{ $article->id }}">Elimina</button>
            </div>
        </div>
    </div>
</div>
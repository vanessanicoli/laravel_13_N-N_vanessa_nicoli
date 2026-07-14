<x-layout>

    @if ($articles->isEmpty())
        <x-display-messages/>
        <x-display-errors/>
        <x-header title="Ops..."/>
        <div class="row my-4">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h2 class="display-4 text-uppercase fw-medium text-shadow-d">Non ci sono articoli da leggere</h2>
                <h2 class="display-4 text-uppercase fw-medium text-shadow-d mb-5">Creane uno per visualizzarlo!</h2>
                <a class="btn btn-home mt-5" type="button" href="{{ route('article.create') }}">Crea articolo</a>
            </div>
        </div>
    @else
    <x-header title="Tutti gli articoli"/>
    <x-display-messages/>
    <x-display-errors/>
        <div class="row container justify-content-center align-items-center my-3">
            @foreach ($articles as $article)
                <x-card :article="$article"/>
                <x-modal-delete :article="$article"/>
            @endforeach
        </div>
    @endif

</x-layout>
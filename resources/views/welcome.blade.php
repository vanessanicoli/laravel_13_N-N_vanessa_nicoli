<x-layout>

    <x-hero />

    <div class="row container-fluid flex-grow-1">
        <div class="col-12 d-flex flex-column flex-md-row gap-5 justify-content-center align-items-center">
            <a class="btn btn-home" type="button" href="{{ route('article.create') }}">Crea articolo</a>
            <a class="btn btn-home" type="button" href="{{ route('article.index') }}">Tutti gli articoli</a>
        </div>
    </div>

</x-layout>
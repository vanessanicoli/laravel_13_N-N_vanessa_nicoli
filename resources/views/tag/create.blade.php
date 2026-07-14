<x-layout>
    
    <x-header title="Crea tag"/>
    
    <x-display-messages/>
    <x-display-errors/>

    <div class="row container-fluid justify-content-center align-items-center flex-grow-1 mb-3">
            <form class="col-12 col-md-6 d-flex flex-column justify-content-center form-custom p-3 p-md-5" method="POST" action="{{ route('tag.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del tag:</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-form mt-4">Crea tag</button>
                </div>
            </form>
    </div>
    
</x-layout>
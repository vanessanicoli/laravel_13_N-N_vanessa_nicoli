<div class="modal fade" id="modalDelete-{{ $article->id }}" tabindex="-1" data-bs-theme="dark">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase">Conferma eliminazione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center fs-5 py-4">
        <p class="m-0">Sei sicuro di voler eliminare questo articolo?</p>
      </div>
      <div class="modal-footer d-flex justify-content-around">
        <button type="button" class="btn btn-modal" data-bs-dismiss="modal">Annulla</button>

        <form action="{{ route('article.destroy', compact('article')) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-modal" type="submit">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>
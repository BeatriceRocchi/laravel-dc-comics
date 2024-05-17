<form action="{{ route('comics.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }} dall\'archivio?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-delete-custom"><i class="fa-solid fa-trash"></i></button>
</form>

<form action="{{ route('comics.destroy', $comic) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-delete-custom"><i class="fa-solid fa-trash"></i></button>
</form>

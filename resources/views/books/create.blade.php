<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Titre du livre:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="author">Auteur:</label>
        <input type="text" id="author" name="author" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <button type="submit">Créer le livre</button>
    </div>
</form>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Avis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Créer un Nouvel Avis</h1>

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="book_id">Livre</label>
                <select name="book_id" id="book_id" class="form-control" required>
                    <option value="">Sélectionnez un livre</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="rating">Évaluation</label>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="">Sélectionnez une évaluation</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Soumettre l'Avis</button>
        </form>
    </div>
</body>
</html>
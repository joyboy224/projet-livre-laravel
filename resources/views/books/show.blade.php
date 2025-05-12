<h1>{{ $book->title }}</h1>
<p><strong>Auteur :</strong> {{ $book->author }}</p>
<p>{{ $book->description }}</p>

<h2>Avis ({{ $book->reviews->count() }})</h2>
@foreach($book->reviews as $review)
    <div>
        <strong>{{ $review->user->name }}</strong> ({{ $review->rating }}/5)<br>
        {{ $review->comment }}
    </div>
@endforeach

<h3>Ajouter un avis</h3>
<form method="POST" action="{{ url('/reviews') }}">
    @csrf
    <input type="hidden" name="book_id" value="{{ $book->id }}">
    Nom : <input type="text" name="user_name"><br>
    Email : <input type="email" name="user_email"><br>
    Note : <input type="number" name="rating" min="1" max="5"><br>
    Commentaire : <textarea name="comment"></textarea><br>
    <button type="submit">Envoyer</button>
</form>
<p><a href="{{ url('/books') }}">Retour à la liste des livres</a></p>

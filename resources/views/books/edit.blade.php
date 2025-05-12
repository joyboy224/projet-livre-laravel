@extends('layouts.app')

@section('content')
<h1>Modifier l'avis</h1>
<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="rating">Note (1-5) :</label>
        <input type="number" name="rating" id="rating" value="{{ $review->rating }}" min="1" max="5" required>
    </div>
    <div>
        <label for="comment">Commentaire :</label>
        <textarea name="comment" id="comment" required>{{ $review->comment }}</textarea>
    </div>
    <button type="submit">Modifier</button>
</form>
@endsection
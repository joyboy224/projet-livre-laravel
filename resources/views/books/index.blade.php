<h1>Liste des livres</h1>
<ul>
@foreach($books as $book)
    <li>
        <a href="{{ url('/books/' . $book->id) }}">{{ $book->title }}</a> par {{ $book->author }}
    </li>
@endforeach
</ul>

{{ $books->links() }}

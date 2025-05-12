<h1>Review Details</h1>

<p><strong>Title:</strong> {{ $review->title }}</p>
<p><strong>Content:</strong> {{ $review->content }}</p>
<p><strong>Rating:</strong> {{ $review->rating }}</p>

<h2>Book Details</h2>
<p><strong>Title:</strong> {{ $review->book->title }}</p>
<p><strong>Author:</strong> {{ $review->book->author }}</p>

<a href="{{ route('reviews.index') }}">Back to Reviews</a>
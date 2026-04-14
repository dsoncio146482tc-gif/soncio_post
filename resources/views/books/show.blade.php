<x-layout>
    <div class="max-w-4xl mx-auto py-8 text-white">
        <h1 class="text-3xl font-bold mb-6">{{ $book->title }}</h1>
        
        <div class="bg-slate-900/50 p-8 rounded-2xl border border-white/10 space-y-4">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Genre:</strong> {{ $book->genre }}</p>
            <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p><strong>Price:</strong> ₱{{ number_format($book->price, 2) }}</p>
            <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
            <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
            <p><strong>Pages:</strong> {{ $book->pages }}</p>
            <p><strong>Language:</strong> {{ $book->language }}</p>
            <p><strong>Description:</strong> {{ $book->description }}</p>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('books.index') }}" class="bg-blue-500 px-4 py-2 rounded">Back to List</a>
        </div>
    </div>
</x-layout>
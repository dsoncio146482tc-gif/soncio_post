<x-layout>
    <div class="max-w-4xl mx-auto py-8 px-4">
        <div class="bg-slate-900/50 p-8 rounded-3xl border border-white/10 shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-6">Edit Book Info</h2>
            
            <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
                @csrf
                @method('PATCH')
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Book Title</label>
                        <input type="text" name="title" value="{{ $book->title }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Author Name</label>
                        <input type="text" name="author" value="{{ $book->author }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>

                    <div>
                        <label class="block text-sm text-blue-200 mb-1">ISBN</label>
                        <input type="text" name="isbn" value="{{ $book->isbn }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Genre</label>
                        <input type="text" name="genre" value="{{ $book->genre }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Published Year</label>
                        <input type="number" name="published_year" value="{{ $book->published_year }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Number of Pages</label>
                        <input type="number" name="pages" value="{{ $book->pages }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Publisher</label>
                        <input type="text" name="publisher" value="{{ $book->publisher }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm text-blue-200 mb-1">Price (PHP)</label>
                        <input type="number" step="0.01" name="price" value="{{ $book->price }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm text-blue-200 mb-1">Language</label>
                        <input type="text" name="language" value="{{ $book->language }}" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white">
                    </div>
                </div>

                <div>
                    <label class="block text-sm text-blue-200 mb-1">Summary Description</label>
                    <textarea name="description" class="w-full bg-slate-800 border border-white/10 rounded-lg p-2 text-white" rows="3">{{ $book->description }}</textarea>
                </div>

                <div class="flex justify-end gap-3 mt-6">
                    <a href="/books" class="px-4 py-2 text-white hover:text-gray-300 transition">Cancel</a>
                    <button type="submit" class="bg-blue-600 px-6 py-2 rounded-lg font-bold text-white shadow-lg shadow-blue-500/30 hover:bg-blue-500 transition">Update Book</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
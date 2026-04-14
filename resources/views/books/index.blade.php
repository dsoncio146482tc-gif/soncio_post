<x-layout>
    <div class="max-w-7xl mx-auto py-8 px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Book Collection</h1>
            <a href="{{ route('books.create') }}" class="bg-amber-400 text-slate-900 px-6 py-3 rounded-xl font-bold hover:bg-amber-300 transition">
                + Add New Book
            </a>
        </div>

        <div class="bg-slate-900/50 p-4 rounded-2xl border border-white/10 mb-6 flex flex-wrap gap-4">
            <form action="{{ route('books.index') }}" method="GET" class="flex-1 flex gap-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title or author..." class="bg-slate-800 border border-white/10 rounded-lg px-4 py-2 text-white outline-none focus:ring-2 focus:ring-amber-400 flex-1">
                
                <select name="genre" class="bg-slate-800 border border-white/10 rounded-lg px-4 py-2 text-white outline-none focus:ring-2 focus:ring-amber-400">
                    <option value="">All Genres</option>
                    <option value="Fiction" {{ request('genre') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                    <option value="Fantasy" {{ request('genre') == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                    <option value="Sci-Fi" {{ request('genre') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                </select>

                <button type="submit" class="bg-blue-600 px-6 py-2 rounded-lg font-bold text-white hover:bg-blue-500 transition">Filter</button>
                <a href="{{ route('books.index') }}" class="bg-slate-700 px-4 py-2 rounded-lg text-white hover:bg-slate-600 flex items-center">Reset</a>
            </form>
        </div>
        <div class="bg-slate-900/50 rounded-3xl border border-white/10 overflow-hidden shadow-2xl">
            <table class="w-full text-left border-collapse">
                <thead class="bg-white/5 text-blue-100 uppercase text-xs font-bold tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Title</th>
                        <th class="px-6 py-4">Author</th>
                        <th class="px-6 py-4">Genre</th>
                        <th class="px-6 py-4">Price</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-white">
                    @forelse($books as $book)
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4">{{ $book->title }}</td>
                        <td class="px-6 py-4 text-blue-200/70">{{ $book->author }}</td>
                        <td class="px-6 py-4"><span class="bg-blue-400/10 text-blue-300 px-3 py-1 rounded-full text-xs">{{ $book->genre }}</span></td>
                        <td class="px-6 py-4 text-amber-400">₱{{ number_format($book->price, 2) }}</td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <a href="{{ route('books.show', $book) }}" class="text-green-400 hover:underline">View</a>
                            <a href="{{ route('books.edit', $book) }}" class="text-blue-400 hover:underline">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Delete this book?')">
                                @csrf @method('DELETE')
                                <button class="text-red-400 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-blue-200/40">No books found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
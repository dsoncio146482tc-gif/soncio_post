<x-layout>
    <div class="max-w-4xl mx-auto py-8 px-4">
        <a href="{{ route('books.index') }}" class="text-blue-400 hover:text-blue-300 mb-6 inline-flex items-center gap-2 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Books List
        </a>

        <div class="bg-slate-900/50 p-8 rounded-3xl border border-white/10 shadow-2xl">
            <h1 class="text-3xl font-bold text-white mb-2">Add New Book</h1>
            <p class="text-blue-200/60 mb-8">Please fill in the details below to register a new book in the database.</p>

            <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Book Title</label>
                        <input type="text" name="title" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="e.g. Harry Potter" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Author Name</label>
                        <input type="text" name="author" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="e.g. J.K. Rowling" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Genre</label>
                        <select name="genre" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" required>
                            <option value="" disabled selected>Select Genre</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Biography">Biography</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">ISBN</label>
                        <input type="text" name="isbn" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="Unique code" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Published Year</label>
                        <input type="number" name="published_year" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="2024" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Number of Pages</label>
                        <input type="number" name="pages" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="300" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Publisher</label>
                        <input type="text" name="publisher" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="Publishing Co." required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-blue-100 mb-2">Price (PHP)</label>
                        <input type="number" step="0.01" name="price" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="0.00" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-blue-100 mb-2">Language</label>
                    <input type="text" name="language" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="English" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-blue-100 mb-2">Summary Description</label>
                    <textarea name="description" rows="4" class="w-full bg-slate-800 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-amber-400 outline-none transition" placeholder="Write a short summary..." required></textarea>
                </div>

                <div class="flex items-center space-x-3 bg-white/5 p-4 rounded-xl border border-white/5">
                    <input type="checkbox" name="is_available" value="1" id="available" checked class="w-5 h-5 rounded border-white/10 bg-slate-800 text-amber-400 focus:ring-amber-400 transition cursor-pointer">
                    <label for="available" class="text-blue-100 text-sm cursor-pointer select-none">Mark as available for borrowing</label>
                </div>

                <div class="flex justify-end space-x-4 pt-6 border-t border-white/10">
                    <button type="reset" class="px-6 py-3 rounded-xl border border-white/10 text-white hover:bg-white/5 transition font-medium">Clear Form</button>
                    <button type="submit" class="px-8 py-3 rounded-xl bg-amber-400 text-slate-950 font-bold hover:bg-amber-300 transition shadow-lg shadow-amber-400/20 active:scale-95">
                        Save Book Record
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
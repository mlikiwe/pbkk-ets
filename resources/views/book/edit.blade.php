<x-modal data-modal-backdrop="static" id="edit{{ $book->id }}">
  <x-modal-header data-modal-toggle="edit{{ $book->id }}">Edit Book's Data</x-modal-header>
  <form  method="post" class="p-4 md:p-5" action="{{ route('daftarbuku.update', $book) }}">
      @csrf
      @method('PUT')
      <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2">
            <x-input-label for="isbn">ISBN</x-input-label>
            <x-modal-input type="number" name="isbn" id="isbn" placeholder="0000000000000" value="{{ $book->isbn }}"></x-modal-input>
        </div>
        <div class="col-span-2">
            <x-input-label for="title">Title</x-input-label>
            <x-modal-input type="text" name="title" id="title" placeholder="Enter Book's Title" value="{{ $book->title }}"></x-modal-input>
        </div>
        <div class="col-span-2">
            <x-input-label for="author">Author</x-input-label>
            <x-modal-input type="text" name="author_name" id="author" placeholder="Enter Book's Author" value="{{ $book->author_name }}"></x-modal-input>
        </div>
        <div class="col-span-2">
            <x-input-label for="genre">Genre</x-input-label>
            <select name="genre_id" id="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected>Select genre</option>
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" {{ $book->genre->genre_name == $genre->genre_name ? 'selected' : '' }}>{{ $genre->genre_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-2">
            <x-input-label for="year_published">Publication Year</x-input-label>
            <x-modal-input type="number" name="year_published" id="year_published" placeholder="1800" value="{{ $book->year_published }}"></x-modal-input>
        </div>
        <div class="col-span-2">
            <x-input-label for="stock">Book's stock</x-input-label>
            <x-modal-input type="number" name="stock" id="stock" placeholder="0" value="{{ $book->stock }}"></x-modal-input>
        </div>
    </div>
    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        Edit
    </button>
  </form>
</x-modal>
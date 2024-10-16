<x-modal data-modal-backdrop="static" id="detail{{ $book->id }}">
  <x-modal-header data-modal-toggle="detail{{ $book->id }}">{{ $book->title }}</x-modal-header>

  {{-- Modal Body --}}
  <div class="p-4 md:p-5 space-y-4">
    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">ISBN</dt>
          <dd class="text-lg font-semibold">{{ $book->isbn }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Title</dt>
          <dd class="text-lg font-semibold">{{ $book->title }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Author</dt>
          <dd class="text-lg font-semibold">{{ $book->author_name }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Genre</dt>
          <dd class="text-lg font-semibold">{{ $book->genre->genre_name }}</dd>
      </div>
      <div class="flex flex-col py-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Publication Year</dt>
          <dd class="text-lg font-semibold">{{ $book->year_published }}</dd>
      </div>
    </dl>
  </div>
</x-modal>
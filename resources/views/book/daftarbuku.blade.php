<x-layout>
    <x-header>{{ $title }}</x-header>
    <div class="px-12 md:px-14">
        {{-- Start Modal Toggle --}}
        <button data-modal-target="create" data-modal-toggle="create" class="my-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add New Book
        </button>

        <form class="max-w-md mx-auto mb-5" method="GET" action="{{ route('daftarbuku.index') }}">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Members by Title, Author, Genre..." value="{{ request('search') }}"/>
                @if(request('search'))
                    <a href="{{ route('daftarbuku.index') }}" class="text-white absolute end-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Clear Search</a>
                @else
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                @endif
            </div>
        </form>
        {{-- End Modal Toggle --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <x-table-thead>
                    <tr>
                        <x-table-header>No</x-table-header>
                        <x-table-header>ISBN</x-table-header>
                        <x-table-header>Title</x-table-header>
                        <x-table-header>Author</x-table-header>
                        <x-table-header class="text-center">Action</x-table-header>
                    </tr>
                </x-table-thead>
                <tbody>
                    @foreach ($books as $book)
                        <x-table-row>
                            <x-table-data>{{ ($books->currentPage() - 1) * $books->perPage() + $loop->index + 1 }}</x-table-data>
                            <x-table-data>{{ $book->isbn }}</x-table-data>
                            <x-table-data class="max-w-xs">
                                <span class="text-base">{{ $book->title }}</span>
                            </x-table-data>
                            <x-table-data>{{ $book->author_name }}</x-table-data>
                            <x-table-data>
                                <div class="text-center">
                                    <button data-modal-target="detail{{ $book->id }}" data-modal-toggle="detail{{ $book->id }}" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Detail</button>
                                    <button data-modal-target="edit{{ $book->id }}" data-modal-toggle="edit{{ $book->id }}" class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Edit</button>
                                    <button data-modal-target="delete{{ $book->id }}" data-modal-toggle="delete{{ $book->id }}" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Delete</button>
                                </div>

                                @include('book.detail')
                                @include('book.edit')
                                @include('book.delete')
                            </x-table-data>
                        </x-table-row>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="py-5">
            {{ $books->links() }}
        </div>
    </div>

    @include('book.create')
</x-layout>

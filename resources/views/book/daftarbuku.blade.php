<x-layout>
    <x-header>{{ $title }}</x-header>
    <div class="px-12 md:px-14">
        {{-- Start Modal Toggle --}}
        <button data-modal-target="create" data-modal-toggle="create" class="my-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add New Book
        </button>
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
                            <x-table-data>{{ $loop->index + 1 }}</x-table-data>
                            <x-table-data>{{ $book->isbn }}</x-table-data>
                            <x-table-data>{{ $book->title }}</x-table-data>
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
    </div>

    @include('book.create')
</x-layout>

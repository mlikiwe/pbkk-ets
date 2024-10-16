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
                            <x-table-data>{{ $book->author->author_name }}</x-table-data>
                            <x-table-data class="text-center">
                                <x-action-buttons></x-action-buttons>
                            </x-table-data>
                        </x-table-row>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('book.create')
</x-layout>

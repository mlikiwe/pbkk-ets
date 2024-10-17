<x-layout>
    <x-header>{{ $title }}</x-header>
    <div class="px-12 md:px-14">
        {{-- Start Add Member Modal Toggle --}}
        <button data-modal-target="create" data-modal-toggle="create" class="my-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add New Borrow
        </button>

        <form class="max-w-md mx-auto mb-5" method="GET" action="{{ route('peminjamanbuku.index') }}">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Members by Member's Name, Book's Title..." value="{{ request('search') }}"/>
                @if(request('search'))
                    <a href="{{ route('peminjamanbuku.index') }}" class="text-white absolute end-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Clear Search</a>
                @else
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                @endif
            </div>
        </form>
        {{-- End Add Member Modal Toggle --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <x-table-thead>
                    <tr>
                        <x-table-header>No</x-table-header>
                        <x-table-header>Name</x-table-header>
                        <x-table-header>Book</x-table-header>
                        <x-table-header>Due Date</x-table-header>
                        <x-table-header>Status</x-table-header>
                        <x-table-header class="text-center">Action</x-table-header>
                    </tr>
                </x-table-thead>
                <tbody>
                    @foreach ($borrows as $borrow)
                        <x-table-row>
                            <x-table-data>{{ ($borrows->currentPage() - 1) * $borrows->perPage() + $loop->index + 1 }}</x-table-data>
                            <x-table-data class="w-1/6">{{ $borrow->member->name }}</x-table-data>
                            <x-table-data class="w-1/4">{{ $borrow->book->title }}</x-table-data>
                            <x-table-data>{{ \Carbon\Carbon::parse($borrow->due_date)->format('d M Y') }}</x-table-data>
                            <x-table-data>{{ $borrow->status }}</x-table-data>
                            <x-table-data>
                                <div class="text-center">
                                    <button data-modal-target="detail{{ $borrow->id }}" data-modal-toggle="detail{{ $borrow->id }}" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Detail</button>
                                    @if ($borrow->status == 'Borrowed')
                                    <button data-modal-target="edit{{ $borrow->id }}" data-modal-toggle="edit{{ $borrow->id }}" class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Edit</button>
                                    <button data-modal-target="delete{{ $borrow->id }}" data-modal-toggle="delete{{ $borrow->id }}" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Delete</button>
                                    @endif
                                </div>

                                @include('borrow.detail')
                                @include('borrow.edit')
                                @include('borrow.delete')
                            </x-table-data>
                        </x-table-row>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="py-5">
            {{ $borrows->links() }}
        </div>
    </div>


    @include('borrow.create')
</x-layout>

<x-modal data-modal-backdrop="static" id="edit{{ $borrow->id }}">
    <x-modal-header data-modal-toggle="edit{{ $borrow->id }}">
        Edit {{ $borrow->member->name }}'s Borrow Data
    </x-modal-header>

    <form method="post" class="p-4 md:p-5" action="{{ route('peminjamanbuku.update', $borrow) }}">
        @csrf
        @method('PUT')

        <!-- Member Dropdown -->
        <div class="col-span-2">
            <x-input-label for="name">Name</x-input-label>
            <select name="member_id" id="member{{ $borrow->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                <option selected>Select Member</option>
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" {{ $member->id == $borrow->member_id ? 'selected' : '' }}>{{ $member->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Book Dropdown -->
        <div class="col-span-2">
            <x-input-label for="book">Books</x-input-label>
            <select name="book_id" id="book{{ $borrow->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $book->id == $borrow->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <!-- Return Date Field -->
        <div class="col-span-2">
            <x-input-label for="return_date">Return Date</x-input-label>
            <input type="text" name="return_date" id="return_date{{ $borrow->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="{{ old('return_date', $borrow->return_date) }}" readonly>
        </div>

        <!-- Status Field (Hidden) -->
        <input type="hidden" name="status" id="status{{ $borrow->id }}" value="{{ $borrow->status }}">

        <!-- "Mark as Returned" Button -->
        <div class="mt-4">
            <button type="button" id="markReturned{{ $borrow->id }}" class="text-white inline-flex items-center bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Mark as Returned
            </button>
        </div>

        <!-- Submit Form Button (Edit) -->
        <div class="mt-4">
            <button type="submit" class="text-white inline-flex items-center bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Confirm
            </button>
        </div>
    </form>
</x-modal>

<!-- Alert Modal for "Don't forget to click Edit" -->
<x-modal id="alertReturned{{ $borrow->id }}" data-modal-backdrop="static">
    <x-modal-header data-modal-toggle="alertReturned{{ $borrow->id }}">Alert</x-modal-header>
    <div class="p-4 md:p-5 text-center">
        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Don't forget to click the "Confirm" button to save your changes!</h3>
        <button id="closeAlert{{ $borrow->id }}" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Okay</button>
    </div>
</x-modal>

<!-- JavaScript to Handle Mark as Returned Logic and Show Alert -->
<script>
    document.getElementById('markReturned{{ $borrow->id }}').addEventListener('click', function() {
        // Set the return date to the current date
        document.getElementById('return_date{{ $borrow->id }}').value = new Date().toISOString().split('T')[0]; // Format YYYY-MM-DD

        // Change status to 'sudah dikembalikan'
        document.getElementById('status{{ $borrow->id }}').value = 'sudah dikembalikan';

        // Show the alert modal
        const alertModal = new Modal(document.getElementById('alertReturned{{ $borrow->id }}'));
        alertModal.show();
    });

    // Event listener to close the alert modal when "Okay" is clicked
    document.getElementById('closeAlert{{ $borrow->id }}').addEventListener('click', function() {
        const alertModal = new Modal(document.getElementById('alertReturned{{ $borrow->id }}'));
        alertModal.hide();
    });
</script>

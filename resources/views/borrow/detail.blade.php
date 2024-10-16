<x-modal data-modal-backdrop="static" id="detail{{ $borrow->id }}">
    <x-modal-header data-modal-toggle="detail{{ $borrow->id }}">{{ $borrow->member->name }}'s Borrow Data</x-modal-header>

    {{-- Modal Body --}}
    <div class="p-4 md:p-5 space-y-4">
      <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
            <dd class="text-lg font-semibold">{{ $borrow->member->name }}</dd>
        </div>
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Book</dt>
            <dd class="text-lg font-semibold">{{ $borrow->book->title }}</dd>
        </div>
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Borrow Date</dt>
            <dd class="text-lg font-semibold">{{ \Carbon\Carbon::parse($borrow->borrow_date)->format('d F Y') }}</dd>
        </div>
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Due Date</dt>
            <dd class="text-lg font-semibold">{{ \Carbon\Carbon::parse($borrow->due_date)->format('d F Y') }}</dd>
        </div>
        <div class="flex flex-col py-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Return Date</dt>
            <dd class="text-lg font-semibold">{{ $borrow->return_date ? \Carbon\Carbon::parse($borrow->return_date)->format('d F Y') : '-' }}</dd>
        </div>
        <div class="flex flex-col py-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Status</dt>
            <dd class="text-lg font-semibold">{{ $borrow->status }}</dd>
        </div>

      </dl>
    </div>
  </x-modal>

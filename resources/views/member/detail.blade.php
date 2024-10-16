<x-modal id="detail{{ $member->id }}">
  <x-modal-header data-modal-toggle="detail{{ $member->id }}">detail{{ $member->id }}</x-modal-header>

  {{-- Modal Body --}}
  <div class="p-4 md:p-5 space-y-4">
    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
          <dd class="text-lg font-semibold">{{ $member->name }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
          <dd class="text-lg font-semibold">{{ $member->email }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Gender</dt>
          <dd class="text-lg font-semibold">{{ $member->gender }}</dd>
      </div>
      <div class="flex flex-col pb-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone Number</dt>
          <dd class="text-lg font-semibold">{{ $member->phone_number }}</dd>
      </div>
      <div class="flex flex-col py-3">
          <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Home address</dt>
          <dd class="text-lg font-semibold">{{ $member->address }}</dd>
      </div>
    </dl>
  </div>
</x-modal>
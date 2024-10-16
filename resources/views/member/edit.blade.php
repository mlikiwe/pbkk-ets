<x-modal id="edit{{ $member->id }}">
  <x-modal-header data-modal-toggle="edit{{ $member->id }}">Edit {{ $member->name }}'s Data</x-modal-header>
  <form  method="post" class="p-4 md:p-5" action="{{ route('daftarmember.update', $member) }}">
      @csrf
      @method('PUT')
      <div class="grid gap-4 mb-4 grid-cols-2">
          <div class="col-span-2">
              <x-input-label for="name">Name</x-input-label>
              <x-modal-input type="text" name="name" id="name" placeholder="John Doe" value="{{ $member->name }}"></x-modal-input>
          </div>
          <div class="col-span-2">
              <x-input-label for="email">Email</x-input-label>
              <x-modal-input type="email" name="email" id="email" placeholder="johndoe@gmail.com" value="{{ $member->email }}" readonly></x-modal-input>
          </div>
          <div class="col-span-2">
              <x-input-label for="gender">Gender</x-input-label>
              <select value="{{ $member->gender }}" name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <option selected>Select gender</option>
                  <option value="Male" {{ $member->gender == 'Male' ? 'selected' : '' }}>Male</option>
                  <option value="Female" {{ $member->gender == 'Female' ? 'selected' : '' }}>Female</option>
              </select>
          </div>
          <div class="col-span-2">
              <x-input-label for="phone_number">Phone Number</x-input-label>
              <x-modal-input type="tel" name="phone_number" id="phone_number" placeholder="62xxxxxxxxxxx" value="{{ $member->phone_number }}"></x-modal-input>
          </div>
          <div class="col-span-2">
              <x-input-label for="address">Address</x-input-label>
              <textarea name="address" id="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Insert member's address" autocomplete="off" required />{{ $member->address }}</textarea>
          </div>
      </div>
      <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
          Register
      </button>
  </form>
</x-modal>
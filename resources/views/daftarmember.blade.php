<x-layout>
    <x-header>{{ $title }}</x-header>
    <div class="px-12 md:px-14">
        {{-- Start Add Member Modal Toggle --}}
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="my-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add New Member
        </button>
        {{-- End Add Member Modal Toggle --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <x-table-thead>
                    <tr>
                        <x-table-header>No</x-table-header>
                        <x-table-header>Name</x-table-header>
                        <x-table-header>Email</x-table-header>
                        <x-table-header>Gender</x-table-header>
                        <x-table-header class="text-center">Action</x-table-header>
                    </tr>
                </x-table-thead>
                <tbody>
                    @foreach ($members as $member)
                        <x-table-row>
                            <x-table-data>{{ $loop->index + 1 }}</x-table-data>
                            <x-table-data>{{ $member->name }}</x-table-data>
                            <x-table-data>{{ $member->email }}</x-table-data>
                            <x-table-data>{{ $member->gender }}</x-table-data>
                            <x-table-data class="text-center">
                                <x-action-buttons></x-action-buttons>
                            </x-table-data>
                        </x-table-row>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Start Main Modal --}}
    <x-modal id="crud-modal">
        <x-modal-header data-modal-toggle="crud-modal">Register New Member</x-modal-header>
        <form class="p-4 md:p-5">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <x-input-label for="name">Name</x-input-label>
                    <x-modal-input type="text" name="name" id="name" placeholder="John Doe"></x-modal-input>
                </div>
                <div class="col-span-2">
                    <x-input-label for="email">Email</x-input-label>
                    <x-modal-input type="email" name="email" id="email" placeholder="johndoe@gmail.com"></x-modal-input>
                </div>
                <div class="col-span-2">
                    <x-input-label for="category">Gender</x-input-label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <x-input-label for="phone-number">Phone Number</x-input-label>
                    <x-modal-input type="tel" name="phone-number" id="phone-number" placeholder="62xxxxxxxxxxx"></x-modal-input>
                </div>
                <div class="col-span-2">
                    <x-input-label for="address">Address</x-input-label>
                    <textarea id="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Insert member's address" required /></textarea>
                </div>
            </div>
            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                Register
            </button>
        </form>
    </x-modal>
    {{-- End Main Modal --}}

    {{-- Start Detail Modal --}}
    <x-modal id="user-detail">
        <x-modal-header data-modal-toggle="user-detail">User Detail</x-modal-header>

        {{-- Modal Body --}}
        <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
            </p>
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
            </p>
        </div>
    </x-modal>
    {{-- End Detail Modal --}}
</x-layout>

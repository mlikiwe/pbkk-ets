<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku</title>
    <!-- Tambahkan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100">

<div class="max-w-lg mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Form Peminjaman Buku</h1>
    <form action="/welcome" method="POST">
        @csrf

        <!-- Input Nama -->
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" id="nama" name="nama"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                   required>
        </div>

        <!-- Dropdown Buku -->
        <div x-data="{
            selectedBooks: [],
            books: {{ $buku->toJson() }}
        }" class="mb-4">
            <label for="buku" class="block text-sm font-medium text-gray-700">Buku yang Dipinjam:</label>
            <select id="buku" name="buku[]" multiple
                    @change="selectedBooks = [...$event.target.options].filter(option => option.selected).map(option => option.value)"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
                @foreach($buku as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>

            <!-- Display Selected Books -->
            <div class="mt-2">
                <h4 class="text-sm font-medium text-gray-700">Buku yang Dipilih:</h4>
                <ul class="list-disc pl-5">
                    <template x-for="bookId in selectedBooks" :key="bookId">
                        <!-- Cari buku yang cocok dari array books berdasarkan ID -->
                        <li x-text="books.find(book => book.id == bookId)?.title || 'Buku tidak ditemukan'"></li>
                    </template>
                </ul>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
        </div>
    </form>
</div>

</body>
</html>

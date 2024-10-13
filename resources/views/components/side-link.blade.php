@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-white text-pink-800' : 'text-white hover:bg-pink-800 hover:text-white'}} flex items-center p-2 text-normal font-normal rounded-lg group">{{ $slot }}</a>

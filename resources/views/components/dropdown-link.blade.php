{{-- <a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a> --}}

<a {{ $attributes->merge(['class' => 'block flex w-full py-2  leading-2 text-gray-500 white:text-gray-300  focus:outline-none focus:bg-gray-600 white:focus:bg-gray-800 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

<a
    {{ $attributes->merge([
        'class' =>
            'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-200 bg-[#0a2a4c] hover:bg-[#1a436d] focus:outline-none focus:bg-[#1a436d] transition duration-150 ease-in-out',
    ]) }}>
    {{ $slot }}
</a>

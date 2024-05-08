<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? 'bg-[#FFC86B] text-white' : 'text-gray-300 hover:bg-[#FFC86B] hover:text-white' }} hover:bg-[#FFC86B] hover:text-white rounded-md px-3 py-2 text-lg font-medium"
    aria-current="page">{{ $slot }}</a>

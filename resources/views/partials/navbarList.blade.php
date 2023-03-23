@foreach ($navbarLists as $navbarList)
    <a href="{{ $navbarList->link }}">
        <li
            class="cursor-pointer sm:text-base text-sm font-semibold active:scale-95 transition-all duration-200 {{ $navbarList->isActive === false ? 'text-gray-200 hover:text-gray-300' : 'text-transparent bg-linearGreen bg-clip-text hover:text-[#57cc99]' }}">
            {{ $navbarList->title }}</li>
    </a>
@endforeach

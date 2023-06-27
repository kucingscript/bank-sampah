<div class="flex flex-wrap sm:flex-nowrap gap-x-5 sm:gap-y-0 gap-y-6 text-gray-300">
    @foreach ($btns as $btn)
        <a href="{{ $btn->link }}" class="btn btn__shadow relative sm:w-full w-2/5">{{ $btn->title }}
            <img src="{{ url('/asset/', $btn->img) }}" alt="{{ $btn->title }}"
                class="absolute sm:w-8 w-6 -top-4 -right-2 sm:-top-6 sm:-right-4" />
        </a>
    @endforeach
</div>

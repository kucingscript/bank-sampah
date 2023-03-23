@foreach ($prinsipLists as $prinsipList)
    <div class="relative max-w-sm rounded-lg shadow-md bg-dark shadow-black hover:opacity-100">
        <div class="p-5">

            <img src="{{ url('/asset/', $prinsipList->img) }}" alt={{ $prinsipList->title }} class="w-14" />

            @include('partials.home.prinsip.prinsipOverlay')

            <h5 class="mt-4 mb-2 text-xl font-bold tracking-tight text-white sm:text-2xl">
                {{ $prinsipList->title }}
            </h5>
            <p class="mb-3 text-sm text-gray-300 sm:text-base">
                {{ $prinsipList->text }}
            </p>
        </div>
    </div>
@endforeach

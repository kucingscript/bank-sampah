@foreach ($trashLists as $trashList)
    <div class="relative w-full rounded-lg shadow-md bg-dark shadow-black hover:opacity-100">
        <div class="px-5 py-6">

            <img src="{{ url('/asset/', $trashList->img) }}" alt={{ $trashList->title }} class="w-10" />

            @include('partials.home.jenisSampah.jenisSampahOverlay')

            <h5 class="mt-4 mb-2 text-xl font-bold tracking-tight text-white sm:text-2xl">
                {{ $trashList->title }}
            </h5>
            <p class="mb-3 text-sm text-gray-300 sm:text-base">
                {{ $trashList->text }}
            </p>
        </div>
    </div>
@endforeach

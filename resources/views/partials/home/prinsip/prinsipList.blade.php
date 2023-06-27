@foreach ($prinsipLists as $prinsipList)
    <div class="relative max-w-sm rounded-lg shadow-md bg-dark shadow-black hover:opacity-100">
        <div class="py-6 sm:py-6 xl:py-8 px-5">
            <img src="{{ url('/asset/', $prinsipList->img) }}" alt={{ $prinsipList->title }} class="w-14" />

            @include('partials.home.prinsip.prinsipOverlay')

            <h5 class="mt-4 mb-2 text-xl font-bold tracking-tight text-white sm:text-2xl">
                {{ $prinsipList->title }}
            </h5>
            <p class="text-sm text-gray-300 sm:text-base">
                {{ $prinsipList->text }}
            </p>
            
            <img src="{{ url('/asset/expand.svg')}}" alt="" class="absolute -top-4 -right-4 w-14 rotate-[-45deg] cursor-pointer" />
        </div>

        
    </div>
@endforeach

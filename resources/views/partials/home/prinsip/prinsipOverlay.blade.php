<div class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all duration-500 hover:opacity-0 bg-dark">

    <div class="flex flex-col items-center justify-center w-full h-full">
        <img src="{{ url('/asset/', $prinsipList->img) }}" alt={{ $prinsipList->title }} class="w-20 " />

        <h5 class="mt-5 text-2xl font-bold text-white">
            {{ $prinsipList->title }}
        </h5>
    </div>

</div>

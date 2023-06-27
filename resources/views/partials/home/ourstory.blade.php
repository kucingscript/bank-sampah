<div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 flex flex-col">
    <div class="w-full flex flex-col justify-center mx-auto max-w-6xl">
        <h1 class="text-3xl lg:text-4xl font-bold sm:text-center text-left leading-9 text-white pb-4">Our Story</h1>
        <p class="font-normal sm:text-base text-sm leading-6 text-white sm:text-center text-justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi deserunt, libero molestias saepe, vero unde
            totam voluptas vitae neque magni ab aperiam veritatis? Cupiditate fuga adipisci vel possimus temporibus
            voluptates ad porro necessitatibus nemo. Sapiente dolores aliquam corporis iste nam commodi veritatis
            voluptas! Ex, optio esse? Aliquam earum natus laboriosam?
        </p>
    </div>
    <div class="w-full pt-4">
        <div class="grid sm:grid-cols-5 grid-cols-3 lg:gap-4 shadow-md rounded-md">

            @foreach ($about as $ab)
                <div class="p-2 flex justify-center flex-col items-center">
                    <img class="block w-full h-auto object-cover rounded-md" src="{{ $ab->src }}"
                        alt="{{ $ab->alt }}" />
                    <p class="font-medium text-xl leading-5 text-white mt-2">cat</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

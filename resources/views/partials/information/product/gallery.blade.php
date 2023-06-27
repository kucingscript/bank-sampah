<main class="pt-10 pb-10 sm:pb-20" text-dark" x-data="carouselFilter()">
    <div class="xl:container sm:px-20 grid grid-cols-1">

        <div class="col-start-1 row-start-2" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                <div class="relative z-20 flex items-center justify-center col-start-1 row-start-1 pointer-events-none">


                    @foreach ($carouselTexts as $carouselText)
                        <h1 class="absolute text-3xl font-black tracking-widest uppercase cursor-pointer"
                            x-show="active == {{ $carouselText->active }}"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">
                            {{ $carouselText->text }}
                        </h1>
                    @endforeach

                </div>


                <div class="col-start-1 row-start-1 carousel" x-ref="carousel">
                    @foreach ($carouselImages as $carouselImage)
                        <div class="w-full px-2 sm:w-1/2 ">
                            <img src="{{ $carouselImage->src }}" loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</main>

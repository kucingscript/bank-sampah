<div class="container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
    <div class="relative w-full py-4 md:py-24 bg-green md:w-1/2 flex flex-col item-center justify-center">

        <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

        <div
            class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-gray-800 font-semibold leading-tight tracking-tight mb-0 z-20">
            <span class="md:block">What Our</span>
            <span class="md-block">Customers</span>
            <span class="block">Are Saying!</span>
        </div>

        <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
            <button class="rounded-l-full border-r bg-gray-100 text-dark focus:outline-none font-bold w-12 h-10"
                x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                &#8592;
            </button><button class="rounded-r-full bg-gray-100 text-dark focus:outline-none font-bold w-12 h-10"
                x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                &#8594;
            </button>
        </div>
    </div>

    <div class="bg-gray-100 md:w-1/2">
        <div class="flex flex-col h-full relative">

            <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-green/60 fill-current w-12 h-12 md:w-16 md:h-16"
                    viewBox="0 0 24 24">
                    <path
                        d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                </svg>
            </div>

            <div class="h-full relative z-10">
                @foreach ($testimonialTexts as $testimonial)
                    <div x-show.immediate="testimonialActive === {{ $testimonial->active }}">
                        <p class="text-gray-600 italic px-6 py-6 md:px-16 md:py-10 text-sm xl:text-2xl sm:text-xl"
                            x-show.transition="testimonialActive == {{ $testimonial->active }}">
                            {{ $testimonial->text }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="flex my-4 justify-center items-center">
                @foreach ($testimonialUsers as $testimonial)
                    <button @click.prevent="testimonialActive = {{ $testimonial->active }}"
                        class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                        :class="{
                            'h-10 w-10 sm:h-12 sm:w-12 opacity-25 bg-indigo-300 text-gray': testimonialActive !=
                                {{ $testimonial->active }},
                            'h-14 w-14 sm:h-16 sm:w-16 opacity-100 bg-green text-dark': testimonialActive ==
                                {{ $testimonial->active }}
                        }">{{ $testimonial->user }}</button>
                @endforeach
            </div>

            <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                @foreach ($testimonialDesc as $testimonial)
                    <div class="text-center" x-show="testimonialActive == {{ $testimonial->active }}">
                        <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">{{ $testimonial->user }}
                        </h2>
                        <small class="text-gray-500 text-xs md:text-sm truncate">{{ $testimonial->desc }}</small>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

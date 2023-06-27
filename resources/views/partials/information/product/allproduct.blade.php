<section x-data="{ open: false }" class="mt-2 -mb-12 sm:px-0">
    <div
        class="relative z-50 flex items-center justify-center w-screen mx-auto text-gray-200 border-2 rounded-full sm:py-6 py-4 sm:w-1/2 bg-dark sm:-mt-8 border-green">
        <h3 class="text-sm sm:text-base font-bold">Katalog Produk</h3>
        <button x-on:click="open = true"
            class="text-xs rounded-full sm:text-sm btn sm:w-1/6 w-1/4 sm:ml-4 ml-2 font-bold">View</button>

        <div class="w-full px-2 sm:px-0 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-md bottom-1/3"
            x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-12"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-12">
            <div class="h-auto sm:p-6 sm:max-w-xl w-full p-5 text-left bg-[#F1F5F9] rounded shadow-xl relative"
                @click.away="open = false">
                <h2 class="text-xl font-bold sm:text-3xl text-dark text-center">Daftar Produk
                    <div class="curved__line-modal mx-auto"></div>
                </h2>

                <h3 class="cursor-pointer font-bold absolute top-2 right-4 text-dark" x-on:click="open=false">X</h3>

                <ul class="mt-2 px-2 text-sm list-decimal text-dark sm:text-base">
                    <li>Consectetur adipisicing elit. Neque nemo earum eaque vel aperiam cupiditate</li>
                    <li>Neque nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Eaque cupiditate eos illo debitis quod neque deserunt itaque velit, earum doloribus</li>
                </ul>
                <div class="flex justify-center mt-6">
                    <button class="w-1/3 text-sm sm:py-3 btn" x-on:click="open = false"> Close</button>
                </div>
            </div>
        </div>

    </div>
</section>

<section x-data="{ open: false }" class="px-4 mt-2 -mb-12 sm:px-0">
    <div
        class="relative z-50 flex items-center justify-center w-full py-4 mx-auto space-x-4 text-gray-200 border-2 rounded-full sm:py-6 sm:w-1/2 bg-dark sm:-mt-8 border-green">
        <h3 class="text-sm sm:text-base">Lihat Produk Yang Tersedia</h3>
        <button x-on:click="open = true" class="text-xs rounded-full sm:text-sm btn">Cek Produk</button>

        <div class="absolute top-0 flex items-center justify-center shadow-md bottom-1/3" x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-12"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-12">
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
                @click.away="open = false">
                <h2 class="text-xl font-bold sm:text-2xl text-dark">Daftar Produk</h2>
                <ul class="m-4 text-sm list-decimal text-dark sm:text-base">
                    <li>Consectetur adipisicing elit. Neque nemo earum eaque vel aperiam cupiditate</li>
                    <li>Neque nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Eaque cupiditate eos illo debitis quod neque deserunt itaque velit, earum doloribus</li>
                </ul>
                <div class="flex justify-center mt-8">
                    <button class="w-1/3 text-sm sm:py-3 btn" x-on:click="open = false"> Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

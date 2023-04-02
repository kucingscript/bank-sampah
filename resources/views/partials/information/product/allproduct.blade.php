<section x-data="{ open: false }" class="px-4 mt-2 -mb-12 sm:px-0">
    <div
        class="relative z-50 flex items-center justify-center w-full py-4 mx-auto space-x-4 text-gray-200 border-2 rounded-full sm:py-6 sm:w-1/2 bg-dark sm:-mt-8 border-green">
        <h3 class="text-sm sm:text-base">Lihat Produk Yang Tersedia</h3>
        <button @click="open = true" class="text-xs rounded-full sm:text-sm btn">Cek Produk</button>

        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
            style="background-color: rgba(0,0,0,.5);" x-show="open">
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
                @click.away="open = false">
                <h2 class="text-2xl">Modal title</h2>
                <ul class="m-4 list-decimal text-dark">
                    <li>Consectetur adipisicing elit. Neque nemo earum eaque vel aperiam cupiditate</li>
                    <li>Neque nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Nemo earum eaque vel aperiam cupiditate. Quae quam dolorum eaque</li>
                    <li>Eaque cupiditate eos illo debitis quod neque deserunt itaque velit, earum doloribus</li>
                </ul>
                <div class="flex justify-center mt-8">
                    <button class="px-4 py-2 text-white bg-gray-700 rounded select-none no-outline focus:shadow-outline"
                        @click="open = false">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

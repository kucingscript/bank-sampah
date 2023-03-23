<h1 class="text-transparent bg-linearGreen bg-clip-text sm:text-5xl text-4xl text-center font-bold">
    Aktivitas Bank Sampah
</h1>

<div class="container flex sm:flex-row flex-col justify-between items-center sm:mt-20 mt-16 space-y-10 sm:space-y-0">
    <div class="act__img order-1"></div>
    <div class="order-2 sm:px-0 px-4">

        @include('partials.home.aktivitas.aktivitasText')

        <div className="flex flex-col">
            @include('partials.home.aktivitas.aktivitasList')
        </div>

    </div>

</div>

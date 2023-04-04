<h1 class="text-4xl font-bold text-center text-transparent bg-linearGreen bg-clip-text sm:text-5xl">
    Aktivitas Bank Sampah
</h1>

<div class="container flex flex-col items-center justify-center mt-16 space-y-10 sm:flex-row sm:space-x-20 sm:mt-20 sm:space-y-0">
    <div class="order-1 act__img"></div>
    <div class="order-2 px-4 sm:px-0">

        @include('partials.home.aktivitas.aktivitasText')

        <div className="flex flex-col">
            @include('partials.home.aktivitas.aktivitasList')
        </div>

    </div>

</div>
